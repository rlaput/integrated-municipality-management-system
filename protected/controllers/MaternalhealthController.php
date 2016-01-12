<?php

class MaternalhealthController extends Controller {

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
        $model_tts = new TetanusToxoidStatus();
        $model_tts->maternal_health_record_id = $id;
        $model_details = new MaternalHealthDetails();
        $model_details->maternal_health_record_id = $id;
        $this->pageTitle = "View Maternal Health Record";

        $this->render('view', array(
            'model' => $this->loadModel($id),
            'model_tts' => $model_tts,
            'model_details' => $model_details,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($id) {
        LoginForm::checkLogin();
        $this->pageTitle = "Create Maternal Health Record";

        if (!Patient::model()->findByPk($id)) {
            Alert::alertMessage('danger', 'Patient does not exist.');
            Yii::app()->getController()->redirect(array('patient/index'));
        }

        if (MaternalHealth::model()->findByAttributes(array('patient_id' => $id))) {
            Alert::alertMessage('danger', 'Maternal Health Record for this patient already exists.');
            Yii::app()->getController()->redirect(array('patient/view', 'id' => $id));
        }

        $model = new MaternalHealth;
        $patient_model = Patient::model()->findByPk($id);
        $model->patient_id = $patient_model->id;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['MaternalHealth'])) {
            $model->attributes = $_POST['MaternalHealth'];

            if (isset($_POST['MaternalHealth']['checklist']) && $_POST['MaternalHealth']['checklist'] !== "")
                $model->checklist = implode(';', $_POST['MaternalHealth']['checklist']);

            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        if (isset($model->checklist) && $model->checklist !== '')
            $model->checklist = explode(';', $model->checklist);

        $this->render('create', array(
            'model' => $model,
            'patient_model' => $patient_model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        LoginForm::checkLogin();
        $this->pageTitle = "Update Maternal Health Record";

        $model = $this->loadModel($id);
        $patient_model = $model->patient;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['MaternalHealth'])) {
            $model->attributes = $_POST['MaternalHealth'];
            if (isset($_POST['MaternalHealth']['checklist']) && $_POST['MaternalHealth']['checklist'] !== "")
                $model->checklist = implode(';', $_POST['MaternalHealth']['checklist']);

            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        if (isset($model->checklist) && $model->checklist !== '')
            $model->checklist = explode(';', $model->checklist);

        $this->render('update', array(
            'model' => $model,
            'patient_model' => $patient_model,
        ));
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

    /**
     * Lists all models.
     */
    public function actionIndex() {
        LoginForm::checkLogin();
        $this->pageTitle = "Maternal Health Records";

        $model = new MaternalHealth('search');
        $model->unsetAttributes();
        if (isset($_GET['MaternalHealth'])) {
            $model->attributes = $_GET['MaternalHealth'];
            if (isset($_GET['MaternalHealth']['patient_family_name']))
                $model->patient_family_name = $_GET['MaternalHealth']['patient_family_name'];
            if (isset($_GET['MaternalHealth']['family_no']))
                $model->family_no = $_GET['MaternalHealth']['family_no'];
        }
        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionAddtts() {
        LoginForm::checkLogin();

        $model = new TetanusToxoidStatus();
// Ajax Validation enabled
        $this->performAjaxValidation_tts($model);
        $flag = true;
        $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
        if (isset($_POST['TetanusToxoidStatus'])) {
            $flag = false;
            $model->attributes = $_POST['TetanusToxoidStatus'];
            if ($model->save()) {
                echo CJSON::encode(
                        array('status' => 'success')
                );
            }
        }
        if ($flag) {
            Yii::app()->clientScript->scriptMap['jquery.js'] = false;
            $this->renderPartial('addForm', array('model' => $model, 'type' => 'tts', 'maternal_health_record_id' => $id), false, true);
        }
    }

    public function actionAdddetails() {
        LoginForm::checkLogin();

        $model = new MaternalHealthDetails();
// Ajax Validation enabled
        $this->performAjaxValidation_details($model);
        $flag = true;
        $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
        if (isset($_POST['MaternalHealthDetails'])) {
            $flag = false;
            $model->attributes = $_POST['MaternalHealthDetails'];
            if ($model->save()) {
                echo CJSON::encode(
                        array('status' => 'success')
                );
            }
        }
        if ($flag) {
            Yii::app()->clientScript->scriptMap['jquery.js'] = false;
            $this->renderPartial('addForm', array('model' => $model, 'type' => 'details', 'maternal_health_record_id' => $id), false, true);
        }
    }

    public function actionUpdate_tts() {
        LoginForm::checkLogin();
        $model = new EditableSaver('TetanusToxoidStatus');
        $model->update();
    }

    public function actionUpdate_details() {

        LoginForm::checkLogin();
        $model = new EditableSaver('MaternalHealthDetails');
        $model->update();
    }

    public function actionDeletetts($id) {
        LoginForm::checkLogin();
        TetanusToxoidStatus::model()->deleteByPk($id);
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionDeletedetails($id) {
        LoginForm::checkLogin();
        MaternalHealthDetails::model()->deleteByPk($id);
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return MaternalHealth the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = MaternalHealth::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param MaternalHealth $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'maternal-health-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    protected function performAjaxValidation_tts($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tts-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    protected function performAjaxValidation_details($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'details-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
