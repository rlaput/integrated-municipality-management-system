<?php

class ChildhealthController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        LoginForm::checkLogin();
        $this->pageTitle = "View Child Health Record";

        $model = $this->loadModel($id);
//        $exclusive_bf_check_model = ExclusiveBfCheck::model()->findByAttributes(array('child_health_record_id' => $id));
        $exclusive_bf_check_model = new ExclusiveBfCheck();
        $this->performAjaxValidation_ebfc($exclusive_bf_check_model);
        $exclusive_bf_check_model->child_health_record_id = $id;
        $immunization_type_model = new ImmunizationType();
        $immunization_type_model->child_health_record_id = $id;
        $childhealth_details_model = new ChildHealthDetails();
        $childhealth_details_model->child_health_record_id = $id;

        $this->render('view', array(
            'model' => $model,
            'exclusive_bf_check_model' => $exclusive_bf_check_model,
            'immunization_type_model' => $immunization_type_model,
            'childhealth_details_model' => $childhealth_details_model,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($id) {
        LoginForm::checkLogin();
        $this->pageTitle = "Create Child Health Record";

        if (!Patient::model()->findByPk($id)) {
            Alert::alertMessage('danger', 'Patient does not exist.');
            Yii::app()->getController()->redirect(array('patient/index'));
        }

        if (ChildHealth::model()->findByAttributes(array('patient_id' => $id))) {
            Alert::alertMessage('danger', 'Child Health Record for this patient already exists.');
            Yii::app()->getController()->redirect(array('patient/view', 'id' => $id));
        }

        $model = new ChildHealth;
        $patient_model = Patient::model()->findByPk($id);
        $model->patient_id = $patient_model->id;

// Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['ChildHealth'])) {
            $model->attributes = $_POST['ChildHealth'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
            'patient_model' => $patient_model,
        ));
    }

    public function actionAddexclusivebfcheck() {
        LoginForm::checkLogin();

        $model = new ExclusiveBfCheck();
// Ajax Validation enabled
        $this->performAjaxValidation_ebfc($model);
        $flag = true;
        $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
        if (isset($_POST['ExclusiveBfCheck'])) {
            $flag = false;
            $model->attributes = $_POST['ExclusiveBfCheck'];
            if ($model->save()) {
                echo CJSON::encode(
                        array('status' => 'success')
                );
            }
        }
        if ($flag) {
            Yii::app()->clientScript->scriptMap['jquery.js'] = false;
            $this->renderPartial('addForm', array('model' => $model, 'type' => 'ebfc', 'child_health_record_id' => $id), false, true);
        }
    }

    public function actionAddimmunizationtype() {
        LoginForm::checkLogin();

        $model = new ImmunizationType();
// Ajax Validation enabled
        $this->performAjaxValidation_it($model);
        $flag = true;
        $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
        if (isset($_POST['ImmunizationType'])) {
            $flag = false;
            $model->attributes = $_POST['ImmunizationType'];
            if ($model->save()) {
                echo CJSON::encode(
                        array('status' => 'success')
                );
            }
        }
        if ($flag) {
            Yii::app()->clientScript->scriptMap['jquery.js'] = false;
            $this->renderPartial('addForm', array('model' => $model, 'type' => 'it', 'child_health_record_id' => $id), false, true);
        }
    }

    public function actionAdddetails() {
        LoginForm::checkLogin();

        $model = new ChildHealthDetails();
// Ajax Validation enabled
        $this->performAjaxValidation_details($model);
        $flag = true;
        $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
        if (isset($_POST['ChildHealthDetails'])) {
            $flag = false;
            $model->attributes = $_POST['ChildHealthDetails'];
            if ($model->save()) {
                echo CJSON::encode(
                        array('status' => 'success')
                );
            }
        }
        if ($flag) {
            Yii::app()->clientScript->scriptMap['jquery.js'] = false;
            $this->renderPartial('addForm', array('model' => $model, 'type' => 'details', 'child_health_record_id' => $id), false, true);
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        LoginForm::checkLogin();
        $this->pageTitle = "Update Child Health Record";

        $model = $this->loadModel($id);
        $patient_model = $model->patient;

// Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['ChildHealth'])) {
            $model->attributes = $_POST['ChildHealth'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
            'patient_model' => $patient_model,
        ));
    }

    public function actionUpdate_ebfc() {

        LoginForm::checkLogin();
        $model = new EditableSaver('ExclusiveBfCheck');
        $model->update();
    }

    public function actionUpdate_it() {

        LoginForm::checkLogin();
        $model = new EditableSaver('ImmunizationType');
        $model->update();
    }

    public function actionUpdate_chd() {

        LoginForm::checkLogin();
        $model = new EditableSaver('ChildHealthDetails');
        $model->update();
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        LoginForm::checkLogin();

        $this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionDeletebfcheck($id) {
        LoginForm::checkLogin();
        ExclusiveBfCheck::model()->deleteByPk($id);
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionDeleteit($id) {
        LoginForm::checkLogin();
        ImmunizationType::model()->deleteByPk($id);
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }
    public function actionDeletechd($id) {
        LoginForm::checkLogin();
        ChildHealthDetails::model()->deleteByPk($id);
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        LoginForm::checkLogin();
        $this->pageTitle = "Child Health Records";

        $model = new ChildHealth('search');
        $model->unsetAttributes();
        if (isset($_GET['ChildHealth'])) {
            $model->attributes = $_GET['ChildHealth'];
            if (isset($_GET['ChildHealth']['patient_family_name']))
                $model->patient_family_name = $_GET['ChildHealth']['patient_family_name'];
        }
        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return ChildHealth the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = ChildHealth::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param ChildHealth $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'child-health-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    protected function performAjaxValidation_ebfc($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'exclusive-bf-check-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    protected function performAjaxValidation_it($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'immunization-type-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    protected function performAjaxValidation_details($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'child-health-details-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
