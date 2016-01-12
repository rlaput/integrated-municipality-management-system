<?php

class NtptreatmentcardController extends Controller {

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
        $this->pageTitle = "View NTP Treatment Card";
        $model_to = new TreatmentOutcome();
        $model_to->ntp_treatment_card_id = $id;
        $model_ser = new SputumExaminationResults();
        $model_ser->ntp_treatment_card_id = $id;
        $model_di = new DrugIntake();
        $model_di->ntp_treatment_card_id = $id;

        $this->render('view', array(
            'model' => $this->loadModel($id),
            'model_to' => $model_to,
            'model_ser' => $model_ser,
            'model_di' => $model_di,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($id) {
        LoginForm::checkLogin();
        $this->pageTitle = "Create NTP Treatment Card";

        if (!Patient::model()->findByPk($id)) {
            Alert::alertMessage('danger', 'Patient does not exist.');
            Yii::app()->getController()->redirect(array('patient/index'));
        }

        $model = new NtpTreatmentCard;

        $patient_model = Patient::model()->findByPk($id);
        $model->patient_id = $patient_model->id;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['NtpTreatmentCard'])) {
            $model->attributes = $_POST['NtpTreatmentCard'];

            if (isset($_POST['NtpTreatmentCard']['type_of_patient']) && $_POST['NtpTreatmentCard']['type_of_patient'] !== "")
                $model->type_of_patient = implode(';', $_POST['NtpTreatmentCard']['type_of_patient']);

            if (isset($_POST['NtpTreatmentCard']['category_1']) && $_POST['NtpTreatmentCard']['category_1'] !== "")
                $model->category_1 = implode(';', $_POST['NtpTreatmentCard']['category_1']);

            if (isset($_POST['NtpTreatmentCard']['category_2']) && $_POST['NtpTreatmentCard']['category_2'] !== "")
                $model->category_2 = implode(';', $_POST['NtpTreatmentCard']['category_2']);

            if (isset($_POST['NtpTreatmentCard']['category_3']) && $_POST['NtpTreatmentCard']['category_3'] !== "")
                $model->category_3 = implode(';', $_POST['NtpTreatmentCard']['category_3']);

            if ($model->save())
                $this->redirect(array('index'));
        }

        if (isset($model->type_of_patient) && $model->type_of_patient !== '')
            $model->type_of_patient = explode(';', $model->type_of_patient);

        if (isset($model->category_1) && $model->category_1 !== '')
            $model->category_1 = explode(';', $model->category_1);

        if (isset($model->category_2) && $model->category_2 !== '')
            $model->category_2 = explode(';', $model->category_2);

        if (isset($model->category_3) && $model->category_3 !== '')
            $model->category_3 = explode(';', $model->category_3);

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
        $this->pageTitle = "Update NTP Treatment Card";

        $model = $this->loadModel($id);

        $patient_model = $model->patient;
        $model->patient_id = $patient_model->id;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['NtpTreatmentCard'])) {
            $model->attributes = $_POST['NtpTreatmentCard'];

            if (isset($_POST['NtpTreatmentCard']['type_of_patient']) && $_POST['NtpTreatmentCard']['type_of_patient'] !== "")
                $model->type_of_patient = implode(';', $_POST['NtpTreatmentCard']['type_of_patient']);

            if (isset($_POST['NtpTreatmentCard']['category_1']) && $_POST['NtpTreatmentCard']['category_1'] !== "")
                $model->category_1 = implode(';', $_POST['NtpTreatmentCard']['category_1']);

            if (isset($_POST['NtpTreatmentCard']['category_2']) && $_POST['NtpTreatmentCard']['category_2'] !== "")
                $model->category_2 = implode(';', $_POST['NtpTreatmentCard']['category_2']);

            if (isset($_POST['NtpTreatmentCard']['category_3']) && $_POST['NtpTreatmentCard']['category_3'] !== "")
                $model->category_3 = implode(';', $_POST['NtpTreatmentCard']['category_3']);

            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        if (isset($model->type_of_patient) && $model->type_of_patient !== '')
            $model->type_of_patient = explode(';', $model->type_of_patient);

        if (isset($model->category_1) && $model->category_1 !== '')
            $model->category_1 = explode(';', $model->category_1);

        if (isset($model->category_2) && $model->category_2 !== '')
            $model->category_2 = explode(';', $model->category_2);

        if (isset($model->category_3) && $model->category_3 !== '')
            $model->category_3 = explode(';', $model->category_3);

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
        $this->pageTitle = "NTP Treatment Cards";

        $model = new NtpTreatmentCard('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['NtpTreatmentCard'])) {
            $model->attributes = $_GET['NtpTreatmentCard'];
            if (isset($_GET['NtpTreatmentCard']['patient_family_name']))
                $model->patient_family_name = $_GET['NtpTreatmentCard']['patient_family_name'];
        }

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionAddto() {
        LoginForm::checkLogin();

        $model = new TreatmentOutcome();
// Ajax Validation enabled
        $this->performAjaxValidation_to($model);
        $flag = true;
        $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
        if (isset($_POST['TreatmentOutcome'])) {
            $flag = false;
            $model->attributes = $_POST['TreatmentOutcome'];
            if ($model->save()) {
                echo CJSON::encode(
                        array('status' => 'success')
                );
            }
        }
        if ($flag) {
            Yii::app()->clientScript->scriptMap['jquery.js'] = false;
            $this->renderPartial('addForm', array('model' => $model, 'type' => 'to', 'ntp_treatment_card_id' => $id), false, true);
        }
    }

    public function actionAddser() {
        LoginForm::checkLogin();

        $model = new SputumExaminationResults();
// Ajax Validation enabled
        $this->performAjaxValidation_ser($model);
        $flag = true;
        $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
        if (isset($_POST['SputumExaminationResults'])) {
            $flag = false;
            $model->attributes = $_POST['SputumExaminationResults'];
            if ($model->save()) {
                echo CJSON::encode(
                        array('status' => 'success')
                );
            }
        }
        if ($flag) {
            Yii::app()->clientScript->scriptMap['jquery.js'] = false;
            $this->renderPartial('addForm', array('model' => $model, 'type' => 'ser', 'ntp_treatment_card_id' => $id), false, true);
        }
    }

    public function actionAdddi() {
        LoginForm::checkLogin();

        $model = new DrugIntake();
// Ajax Validation enabled
        $this->performAjaxValidation_di($model);
        $flag = true;
        $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
        if (isset($_POST['DrugIntake'])) {
            $flag = false;
            $model->attributes = $_POST['DrugIntake'];
            if ($model->save()) {
                echo CJSON::encode(
                        array('status' => 'success')
                );
            }
        }
        if ($flag) {
            Yii::app()->clientScript->scriptMap['jquery.js'] = false;
            $this->renderPartial('addForm', array('model' => $model, 'type' => 'di', 'ntp_treatment_card_id' => $id), false, true);
        }
    }

    public function actionUpdate_to() {
        LoginForm::checkLogin();
        $model = new EditableSaver('TreatmentOutcome');
        $model->update();
    }

    public function actionUpdate_ser() {
        LoginForm::checkLogin();
        $model = new EditableSaver('SputumExaminationResults');
        $model->update();
    }

    public function actionUpdate_di() {
        LoginForm::checkLogin();
        $model = new EditableSaver('DrugIntake');
        $model->update();
    }

    public function actionDeleteto($id) {
        LoginForm::checkLogin();
        TreatmentOutcome::model()->deleteByPk($id);
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }
    public function actionDeleteser($id) {
        LoginForm::checkLogin();
        SputumExaminationResults::model()->deleteByPk($id);
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }
    public function actionDeletedi($id) {
        LoginForm::checkLogin();
        DrugIntake::model()->deleteByPk($id);
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return NtpTreatmentCard the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = NtpTreatmentCard::model()->findByPk($id);

        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param NtpTreatmentCard $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'ntp-treatment-card-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    protected function performAjaxValidation_to($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'to-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    protected function performAjaxValidation_ser($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'ser-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    protected function performAjaxValidation_di($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'di-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
