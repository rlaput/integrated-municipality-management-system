<?php

class NtplaboratoryrequestController extends Controller {

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
        $this->pageTitle = "View NTP Laboratory Request";
        $model_laboratory_test = new LaboratoryTest();
        $model_laboratory_test->ntp_laboratory_request_id = $id;

        $this->render('view', array(
            'model' => $this->loadModel($id),
            'model_laboratory_test' => $model_laboratory_test
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($id) {
        LoginForm::checkLogin();
        $this->pageTitle = "Create NTP Laboratory Request";


        if (!Patient::model()->findByPk($id)) {
            Alert::alertMessage('danger', 'Patient does not exist.');
            Yii::app()->getController()->redirect(array('patient/index'));
        }

        $model = new NtpLaboratoryRequest;

        $patient_model = Patient::model()->findByPk($id);
        $model->patient_id = $patient_model->id;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['NtpLaboratoryRequest'])) {
            $model->attributes = $_POST['NtpLaboratoryRequest'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
            'patient_model' => $patient_model
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        LoginForm::checkLogin();
        $this->pageTitle = "Update NTP Laboratory Request";

        $model = $this->loadModel($id);

        $patient_model = $model->patient;
        $model->patient_id = $patient_model->id;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['NtpLaboratoryRequest'])) {
            $model->attributes = $_POST['NtpLaboratoryRequest'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
            'patient_model' => $patient_model
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
        $this->pageTitle = "NTP Laboratory Requests";

        $model = new NtpLaboratoryRequest('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['NtpLaboratoryRequest'])) {
            $model->attributes = $_GET['NtpLaboratoryRequest'];
            if (isset($_GET['NtpLaboratoryRequest']['patient_family_name']))
                $model->patient_family_name = $_GET['NtpLaboratoryRequest']['patient_family_name'];
        }

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionAddlt() {
        LoginForm::checkLogin();

        $model = new LaboratoryTest();
// Ajax Validation enabled
        $this->performAjaxValidation_lt($model);
        $flag = true;
        $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
        if (isset($_POST['LaboratoryTest'])) {
            $flag = false;
            $model->attributes = $_POST['LaboratoryTest'];
            if ($model->save()) {
                echo CJSON::encode(
                        array('status' => 'success')
                );
            }
        }
        if ($flag) {
            Yii::app()->clientScript->scriptMap['jquery.js'] = false;
            $this->renderPartial('addForm', array('model' => $model, 'ntp_laboratory_request_id' => $id), false, true);
        }
    }

    public function actionUpdate_lt() {
        LoginForm::checkLogin();
        $model = new EditableSaver('LaboratoryTest');
        $model->update();
    }

    public function actionDeletelt($id) {
        LoginForm::checkLogin();
        LaboratoryTest::model()->deleteByPk($id);
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return NtpLaboratoryRequest the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = NtpLaboratoryRequest::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param NtpLaboratoryRequest $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'ntp-laboratory-request-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    protected function performAjaxValidation_lt($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'lt-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
