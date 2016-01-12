<?php

class FamilyplanningserviceController extends Controller {

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
        $this->pageTitle = "View Family Planning Service Record";

        $family_planning_service_details_model = new FamilyPlanningServiceDetails();
        $family_planning_service_details_model->family_planning_service_id = $id;

        $this->render('view', array(
            'model' => $this->loadModel($id),
            'family_planning_service_details_model' => $family_planning_service_details_model
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($id) {
        LoginForm::checkLogin();
        $this->pageTitle = "Create Family Planning Service Record";

        if (!Patient::model()->findByPk($id)) {
            Alert::alertMessage('danger', 'Patient does not exist.');
            Yii::app()->getController()->redirect(array('patient/index'));
        }

        if (FamilyPlanningService::model()->findByAttributes(array('patient_id' => $id))) {
            Alert::alertMessage('danger', 'Family Planning Service Record for this patient already exists.');
            Yii::app()->getController()->redirect(array('patient/view', 'id' => $id));
        }

        $model = new FamilyPlanningService;
        $medical_history_model = new MedicalHistory;
        $obstetrical_history_model = new ObstetricalHistory;
        $physical_examination_model = new PhysicalExamination;
        $pelvic_examination_model = new PelvicExamination;
        $patient_model = Patient::model()->findByPk($id);
        $model->patient_id = $patient_model->id;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['FamilyPlanningService'])) {
            $model->attributes = $_POST['FamilyPlanningService'];

            if (isset($_POST['FamilyPlanningService']['method_accepted']) && $_POST['FamilyPlanningService']['method_accepted'] !== "")
                $model->method_accepted = implode(';', $_POST['FamilyPlanningService']['method_accepted']);

            if ($model->save()) {
                $medical_history_model->family_planning_service_id = $model->id;
                $obstetrical_history_model->family_planning_service_id = $model->id;
                $physical_examination_model->family_planning_service_id = $model->id;
                $pelvic_examination_model->family_planning_service_id = $model->id;

                if (isset($_POST['MedicalHistory'])) {
                    $medical_history_model->attributes = $_POST['MedicalHistory'];

                    if (isset($_POST['MedicalHistory']['heent']) && $_POST['MedicalHistory']['heent'] !== "")
                        $medical_history_model->heent = implode(';', $_POST['MedicalHistory']['heent']);
                    if (isset($_POST['MedicalHistory']['chest_heart']) && $_POST['MedicalHistory']['chest_heart'] !== "")
                        $medical_history_model->chest_heart = implode(';', $_POST['MedicalHistory']['chest_heart']);
                    if (isset($_POST['MedicalHistory']['abdomen']) && $_POST['MedicalHistory']['abdomen'] !== "")
                        $medical_history_model->abdomen = implode(';', $_POST['MedicalHistory']['abdomen']);
                    if (isset($_POST['MedicalHistory']['genital']) && $_POST['MedicalHistory']['genital'] !== "")
                        $medical_history_model->genital = implode(';', $_POST['MedicalHistory']['genital']);
                    if (isset($_POST['MedicalHistory']['extremities']) && $_POST['MedicalHistory']['extremities'] !== "")
                        $medical_history_model->extremities = implode(';', $_POST['MedicalHistory']['extremities']);
                    if (isset($_POST['MedicalHistory']['skin']) && $_POST['MedicalHistory']['skin'] !== "")
                        $medical_history_model->skin = implode(';', $_POST['MedicalHistory']['skin']);
                    if (isset($_POST['MedicalHistory']['other_history']) && $_POST['MedicalHistory']['other_history'] !== "")
                        $medical_history_model->other_history = implode(';', $_POST['MedicalHistory']['other_history']);
                }

                if (isset($_POST['ObstetricalHistory'])) {
                    $obstetrical_history_model->attributes = $_POST['ObstetricalHistory'];

                    if (isset($_POST['ObstetricalHistory']['other_history']) && $_POST['ObstetricalHistory']['other_history'] !== "")
                        $obstetrical_history_model->other_history = implode(';', $_POST['ObstetricalHistory']['other_history']);
                }

                if (isset($_POST['PhysicalExamination'])) {
                    $physical_examination_model->attributes = $_POST['PhysicalExamination'];

                    if (isset($_POST['PhysicalExamination']['conjunctiva']) && $_POST['PhysicalExamination']['conjunctiva'] !== "")
                        $physical_examination_model->conjunctiva = implode(';', $_POST['PhysicalExamination']['conjunctiva']);
                    if (isset($_POST['PhysicalExamination']['neck']) && $_POST['PhysicalExamination']['neck'] !== "")
                        $physical_examination_model->neck = implode(';', $_POST['PhysicalExamination']['neck']);
                    if (isset($_POST['PhysicalExamination']['breast']) && $_POST['PhysicalExamination']['breast'] !== "")
                        $physical_examination_model->breast = implode(';', $_POST['PhysicalExamination']['breast']);
                    if (isset($_POST['PhysicalExamination']['thorax']) && $_POST['PhysicalExamination']['thorax'] !== "")
                        $physical_examination_model->thorax = implode(';', $_POST['PhysicalExamination']['thorax']);
                    if (isset($_POST['PhysicalExamination']['abdomen']) && $_POST['PhysicalExamination']['abdomen'] !== "")
                        $physical_examination_model->abdomen = implode(';', $_POST['PhysicalExamination']['abdomen']);
                    if (isset($_POST['PhysicalExamination']['extremities']) && $_POST['PhysicalExamination']['extremities'] !== "")
                        $physical_examination_model->extremities = implode(';', $_POST['PhysicalExamination']['extremities']);
                }

                if (isset($_POST['PelvicExamination'])) {
                    $pelvic_examination_model->attributes = $_POST['PelvicExamination'];

                    if (isset($_POST['PelvicExamination']['perenium']) && $_POST['PelvicExamination']['perenium'] !== "")
                        $pelvic_examination_model->perenium = implode(';', $_POST['PelvicExamination']['perenium']);
                    if (isset($_POST['PelvicExamination']['vagina']) && $_POST['PelvicExamination']['vagina'] !== "")
                        $pelvic_examination_model->vagina = implode(';', $_POST['PelvicExamination']['vagina']);
                    if (isset($_POST['PelvicExamination']['cervix']) && $_POST['PelvicExamination']['cervix'] !== "")
                        $pelvic_examination_model->cervix = implode(';', $_POST['PelvicExamination']['cervix']);
                    if (isset($_POST['PelvicExamination']['cervix_color']) && $_POST['PelvicExamination']['cervix_color'] !== "")
                        $pelvic_examination_model->cervix_color = implode(';', $_POST['PelvicExamination']['cervix_color']);
                    if (isset($_POST['PelvicExamination']['cervix_consistency']) && $_POST['PelvicExamination']['cervix_consistency'] !== "")
                        $pelvic_examination_model->cervix_consistency = implode(';', $_POST['PelvicExamination']['cervix_consistency']);
                    if (isset($_POST['PelvicExamination']['uterus_position']) && $_POST['PelvicExamination']['uterus_position'] !== "")
                        $pelvic_examination_model->uterus_position = implode(';', $_POST['PelvicExamination']['uterus_position']);
                    if (isset($_POST['PelvicExamination']['uterus_size']) && $_POST['PelvicExamination']['uterus_size'] !== "")
                        $pelvic_examination_model->uterus_size = implode(';', $_POST['PelvicExamination']['uterus_size']);
                    if (isset($_POST['PelvicExamination']['uterus_adnexa']) && $_POST['PelvicExamination']['uterus_adnexa'] !== "")
                        $pelvic_examination_model->uterus_adnexa = implode(';', $_POST['PelvicExamination']['uterus_adnexa']);
                }

                $medical_history_model->save();
                $obstetrical_history_model->save();
                $physical_examination_model->save();
                $pelvic_examination_model->save();

                $this->redirect(array('index'));
            }
        }

        if (isset($model->method_accepted) && $model->method_accepted !== '')
            $model->method_accepted = explode(';', $model->method_accepted);

        if (isset($medical_history_model->heent) && $medical_history_model->heent !== '')
            $medical_history_model->heent = explode(';', $medical_history_model->heent);
        if (isset($medical_history_model->chest_heart) && $medical_history_model->chest_heart !== '')
            $medical_history_model->chest_heart = explode(';', $medical_history_model->chest_heart);
        if (isset($medical_history_model->abdomen) && $medical_history_model->abdomen !== '')
            $medical_history_model->abdomen = explode(';', $medical_history_model->abdomen);
        if (isset($medical_history_model->genital) && $medical_history_model->genital !== '')
            $medical_history_model->genital = explode(';', $medical_history_model->genital);
        if (isset($medical_history_model->extremities) && $medical_history_model->extremities !== '')
            $medical_history_model->extremities = explode(';', $medical_history_model->extremities);
        if (isset($medical_history_model->skin) && $medical_history_model->skin !== '')
            $medical_history_model->skin = explode(';', $medical_history_model->skin);
        if (isset($medical_history_model->other_history) && $medical_history_model->other_history !== '')
            $medical_history_model->other_history = explode(';', $medical_history_model->other_history);

        if (isset($obstetrical_history_model->other_history) && $obstetrical_history_model->other_history !== '')
            $obstetrical_history_model->other_history = explode(';', $obstetrical_history_model->other_history);

        if (isset($physical_examination_model->conjunctiva) && $physical_examination_model->conjunctiva !== '')
            $physical_examination_model->conjunctiva = explode(';', $physical_examination_model->conjunctiva);
        if (isset($physical_examination_model->neck) && $physical_examination_model->neck !== '')
            $physical_examination_model->neck = explode(';', $physical_examination_model->neck);
        if (isset($physical_examination_model->breast) && $physical_examination_model->breast !== '')
            $physical_examination_model->breast = explode(';', $physical_examination_model->breast);
        if (isset($physical_examination_model->thorax) && $physical_examination_model->thorax !== '')
            $physical_examination_model->thorax = explode(';', $physical_examination_model->thorax);
        if (isset($physical_examination_model->abdomen) && $physical_examination_model->abdomen !== '')
            $physical_examination_model->abdomen = explode(';', $physical_examination_model->abdomen);
        if (isset($physical_examination_model->extremities) && $physical_examination_model->extremities !== '')
            $physical_examination_model->extremities = explode(';', $physical_examination_model->extremities);

        if (isset($pelvic_examination_model->perenium) && $pelvic_examination_model->perenium !== '')
            $pelvic_examination_model->perenium = explode(';', $pelvic_examination_model->perenium);
        if (isset($pelvic_examination_model->vagina) && $pelvic_examination_model->vagina !== '')
            $pelvic_examination_model->vagina = explode(';', $pelvic_examination_model->vagina);
        if (isset($pelvic_examination_model->cervix) && $pelvic_examination_model->cervix !== '')
            $pelvic_examination_model->cervix = explode(';', $pelvic_examination_model->cervix);
        if (isset($pelvic_examination_model->cervix_color) && $pelvic_examination_model->cervix_color !== '')
            $pelvic_examination_model->cervix_color = explode(';', $pelvic_examination_model->cervix_color);
        if (isset($pelvic_examination_model->cervix_consistency) && $pelvic_examination_model->cervix_consistency !== '')
            $pelvic_examination_model->cervix_consistency = explode(';', $pelvic_examination_model->cervix_consistency);
        if (isset($pelvic_examination_model->uterus_position) && $pelvic_examination_model->uterus_position !== '')
            $pelvic_examination_model->uterus_position = explode(';', $pelvic_examination_model->uterus_position);
        if (isset($pelvic_examination_model->uterus_size) && $pelvic_examination_model->uterus_size !== '')
            $pelvic_examination_model->uterus_size = explode(';', $pelvic_examination_model->uterus_size);
        if (isset($pelvic_examination_model->uterus_adnexa) && $pelvic_examination_model->uterus_adnexa !== '')
            $pelvic_examination_model->uterus_adnexa = explode(';', $pelvic_examination_model->uterus_adnexa);

        $this->render('create', array(
            'model' => $model,
            'patient_model' => $patient_model,
            'medical_history_model' => $medical_history_model,
            'obstetrical_history_model' => $obstetrical_history_model,
            'physical_examination_model' => $physical_examination_model,
            'pelvic_examination_model' => $pelvic_examination_model
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        LoginForm::checkLogin();
        $this->pageTitle = "Update Family Planning Service Record";

        $model = $this->loadModel($id);
        $medical_history_model = $model->medicalHistory;
        $obstetrical_history_model = $model->obstetricalHistory;
        $physical_examination_model = $model->physicalExamination;
        $pelvic_examination_model = $model->pelvicExamination;
        $patient_model = $model->patient;
        $model->patient_id = $patient_model->id;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['FamilyPlanningService'])) {
            $model->attributes = $_POST['FamilyPlanningService'];

            if (isset($_POST['FamilyPlanningService']['method_accepted']) && $_POST['FamilyPlanningService']['method_accepted'] !== "")
                $model->method_accepted = implode(';', $_POST['FamilyPlanningService']['method_accepted']);

            if ($model->save()) {
                $medical_history_model->family_planning_service_id = $model->id;
                $obstetrical_history_model->family_planning_service_id = $model->id;
                $physical_examination_model->family_planning_service_id = $model->id;
                $pelvic_examination_model->family_planning_service_id = $model->id;

                if (isset($_POST['MedicalHistory'])) {
                    $medical_history_model->attributes = $_POST['MedicalHistory'];

                    if (isset($_POST['MedicalHistory']['heent']) && $_POST['MedicalHistory']['heent'] !== "")
                        $medical_history_model->heent = implode(';', $_POST['MedicalHistory']['heent']);
                    if (isset($_POST['MedicalHistory']['chest_heart']) && $_POST['MedicalHistory']['chest_heart'] !== "")
                        $medical_history_model->chest_heart = implode(';', $_POST['MedicalHistory']['chest_heart']);
                    if (isset($_POST['MedicalHistory']['abdomen']) && $_POST['MedicalHistory']['abdomen'] !== "")
                        $medical_history_model->abdomen = implode(';', $_POST['MedicalHistory']['abdomen']);
                    if (isset($_POST['MedicalHistory']['genital']) && $_POST['MedicalHistory']['genital'] !== "")
                        $medical_history_model->genital = implode(';', $_POST['MedicalHistory']['genital']);
                    if (isset($_POST['MedicalHistory']['extremities']) && $_POST['MedicalHistory']['extremities'] !== "")
                        $medical_history_model->extremities = implode(';', $_POST['MedicalHistory']['extremities']);
                    if (isset($_POST['MedicalHistory']['skin']) && $_POST['MedicalHistory']['skin'] !== "")
                        $medical_history_model->skin = implode(';', $_POST['MedicalHistory']['skin']);
                    if (isset($_POST['MedicalHistory']['other_history']) && $_POST['MedicalHistory']['other_history'] !== "")
                        $medical_history_model->other_history = implode(';', $_POST['MedicalHistory']['other_history']);
                }

                if (isset($_POST['ObstetricalHistory'])) {
                    $obstetrical_history_model->attributes = $_POST['ObstetricalHistory'];

                    if (isset($_POST['ObstetricalHistory']['other_history']) && $_POST['ObstetricalHistory']['other_history'] !== "")
                        $obstetrical_history_model->other_history = implode(';', $_POST['ObstetricalHistory']['other_history']);
                }

                if (isset($_POST['PhysicalExamination'])) {
                    $physical_examination_model->attributes = $_POST['PhysicalExamination'];

                    if (isset($_POST['PhysicalExamination']['conjunctiva']) && $_POST['PhysicalExamination']['conjunctiva'] !== "")
                        $physical_examination_model->conjunctiva = implode(';', $_POST['PhysicalExamination']['conjunctiva']);
                    if (isset($_POST['PhysicalExamination']['neck']) && $_POST['PhysicalExamination']['neck'] !== "")
                        $physical_examination_model->neck = implode(';', $_POST['PhysicalExamination']['neck']);
                    if (isset($_POST['PhysicalExamination']['breast']) && $_POST['PhysicalExamination']['breast'] !== "")
                        $physical_examination_model->breast = implode(';', $_POST['PhysicalExamination']['breast']);
                    if (isset($_POST['PhysicalExamination']['thorax']) && $_POST['PhysicalExamination']['thorax'] !== "")
                        $physical_examination_model->thorax = implode(';', $_POST['PhysicalExamination']['thorax']);
                    if (isset($_POST['PhysicalExamination']['abdomen']) && $_POST['PhysicalExamination']['abdomen'] !== "")
                        $physical_examination_model->abdomen = implode(';', $_POST['PhysicalExamination']['abdomen']);
                    if (isset($_POST['PhysicalExamination']['extremities']) && $_POST['PhysicalExamination']['extremities'] !== "")
                        $physical_examination_model->extremities = implode(';', $_POST['PhysicalExamination']['extremities']);
                }

                if (isset($_POST['PelvicExamination'])) {
                    $pelvic_examination_model->attributes = $_POST['PelvicExamination'];

                    if (isset($_POST['PelvicExamination']['perenium']) && $_POST['PelvicExamination']['perenium'] !== "")
                        $pelvic_examination_model->perenium = implode(';', $_POST['PelvicExamination']['perenium']);
                    if (isset($_POST['PelvicExamination']['vagina']) && $_POST['PelvicExamination']['vagina'] !== "")
                        $pelvic_examination_model->vagina = implode(';', $_POST['PelvicExamination']['vagina']);
                    if (isset($_POST['PelvicExamination']['cervix']) && $_POST['PelvicExamination']['cervix'] !== "")
                        $pelvic_examination_model->cervix = implode(';', $_POST['PelvicExamination']['cervix']);
                    if (isset($_POST['PelvicExamination']['cervix_color']) && $_POST['PelvicExamination']['cervix_color'] !== "")
                        $pelvic_examination_model->cervix_color = implode(';', $_POST['PelvicExamination']['cervix_color']);
                    if (isset($_POST['PelvicExamination']['cervix_consistency']) && $_POST['PelvicExamination']['cervix_consistency'] !== "")
                        $pelvic_examination_model->cervix_consistency = implode(';', $_POST['PelvicExamination']['cervix_consistency']);
                    if (isset($_POST['PelvicExamination']['uterus_position']) && $_POST['PelvicExamination']['uterus_position'] !== "")
                        $pelvic_examination_model->uterus_position = implode(';', $_POST['PelvicExamination']['uterus_position']);
                    if (isset($_POST['PelvicExamination']['uterus_size']) && $_POST['PelvicExamination']['uterus_size'] !== "")
                        $pelvic_examination_model->uterus_size = implode(';', $_POST['PelvicExamination']['uterus_size']);
                    if (isset($_POST['PelvicExamination']['uterus_adnexa']) && $_POST['PelvicExamination']['uterus_adnexa'] !== "")
                        $pelvic_examination_model->uterus_adnexa = implode(';', $_POST['PelvicExamination']['uterus_adnexa']);
                }

                $medical_history_model->save();
                $obstetrical_history_model->save();
                $physical_examination_model->save();
                $pelvic_examination_model->save();

                $this->redirect(array('index'));
            }
        }

        if (isset($model->method_accepted) && $model->method_accepted !== '')
            $model->method_accepted = explode(';', $model->method_accepted);

        if (isset($medical_history_model->heent) && $medical_history_model->heent !== '')
            $medical_history_model->heent = explode(';', $medical_history_model->heent);
        if (isset($medical_history_model->chest_heart) && $medical_history_model->chest_heart !== '')
            $medical_history_model->chest_heart = explode(';', $medical_history_model->chest_heart);
        if (isset($medical_history_model->abdomen) && $medical_history_model->abdomen !== '')
            $medical_history_model->abdomen = explode(';', $medical_history_model->abdomen);
        if (isset($medical_history_model->genital) && $medical_history_model->genital !== '')
            $medical_history_model->genital = explode(';', $medical_history_model->genital);
        if (isset($medical_history_model->extremities) && $medical_history_model->extremities !== '')
            $medical_history_model->extremities = explode(';', $medical_history_model->extremities);
        if (isset($medical_history_model->skin) && $medical_history_model->skin !== '')
            $medical_history_model->skin = explode(';', $medical_history_model->skin);
        if (isset($medical_history_model->other_history) && $medical_history_model->other_history !== '')
            $medical_history_model->other_history = explode(';', $medical_history_model->other_history);

        if (isset($obstetrical_history_model->other_history) && $obstetrical_history_model->other_history !== '')
            $obstetrical_history_model->other_history = explode(';', $obstetrical_history_model->other_history);

        if (isset($physical_examination_model->conjunctiva) && $physical_examination_model->conjunctiva !== '')
            $physical_examination_model->conjunctiva = explode(';', $physical_examination_model->conjunctiva);
        if (isset($physical_examination_model->neck) && $physical_examination_model->neck !== '')
            $physical_examination_model->neck = explode(';', $physical_examination_model->neck);
        if (isset($physical_examination_model->breast) && $physical_examination_model->breast !== '')
            $physical_examination_model->breast = explode(';', $physical_examination_model->breast);
        if (isset($physical_examination_model->thorax) && $physical_examination_model->thorax !== '')
            $physical_examination_model->thorax = explode(';', $physical_examination_model->thorax);
        if (isset($physical_examination_model->abdomen) && $physical_examination_model->abdomen !== '')
            $physical_examination_model->abdomen = explode(';', $physical_examination_model->abdomen);
        if (isset($physical_examination_model->extremities) && $physical_examination_model->extremities !== '')
            $physical_examination_model->extremities = explode(';', $physical_examination_model->extremities);

        if (isset($pelvic_examination_model->perenium) && $pelvic_examination_model->perenium !== '')
            $pelvic_examination_model->perenium = explode(';', $pelvic_examination_model->perenium);
        if (isset($pelvic_examination_model->vagina) && $pelvic_examination_model->vagina !== '')
            $pelvic_examination_model->vagina = explode(';', $pelvic_examination_model->vagina);
        if (isset($pelvic_examination_model->cervix) && $pelvic_examination_model->cervix !== '')
            $pelvic_examination_model->cervix = explode(';', $pelvic_examination_model->cervix);
        if (isset($pelvic_examination_model->cervix_color) && $pelvic_examination_model->cervix_color !== '')
            $pelvic_examination_model->cervix_color = explode(';', $pelvic_examination_model->cervix_color);
        if (isset($pelvic_examination_model->cervix_consistency) && $pelvic_examination_model->cervix_consistency !== '')
            $pelvic_examination_model->cervix_consistency = explode(';', $pelvic_examination_model->cervix_consistency);
        if (isset($pelvic_examination_model->uterus_position) && $pelvic_examination_model->uterus_position !== '')
            $pelvic_examination_model->uterus_position = explode(';', $pelvic_examination_model->uterus_position);
        if (isset($pelvic_examination_model->uterus_size) && $pelvic_examination_model->uterus_size !== '')
            $pelvic_examination_model->uterus_size = explode(';', $pelvic_examination_model->uterus_size);
        if (isset($pelvic_examination_model->uterus_adnexa) && $pelvic_examination_model->uterus_adnexa !== '')
            $pelvic_examination_model->uterus_adnexa = explode(';', $pelvic_examination_model->uterus_adnexa);

        $this->render('update', array(
            'model' => $model,
            'patient_model' => $patient_model,
            'medical_history_model' => $medical_history_model,
            'obstetrical_history_model' => $obstetrical_history_model,
            'physical_examination_model' => $physical_examination_model,
            'pelvic_examination_model' => $pelvic_examination_model
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

    public function actionAdddetails() {
        LoginForm::checkLogin();

        $model = new FamilyPlanningServiceDetails();
// Ajax Validation enabled
        $this->performAjaxValidation_details($model);
        $flag = true;
        $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
        if (isset($_POST['FamilyPlanningServiceDetails'])) {
            $flag = false;
            $model->attributes = $_POST['FamilyPlanningServiceDetails'];
            if ($model->save()) {
                echo CJSON::encode(
                        array('status' => 'success')
                );
            }
        }
        if ($flag) {
            Yii::app()->clientScript->scriptMap['jquery.js'] = false;
            $this->renderPartial('addForm', array('model' => $model, 'family_planning_service_id' => $id), false, true);
        }
    }

    public function actionUpdate_fps() {
        LoginForm::checkLogin();

        $model = new EditableSaver('FamilyPlanningServiceDetails');
        $model->update();
    }

    public function actionDeletefps($id) {
        LoginForm::checkLogin();
        FamilyPlanningServiceDetails::model()->deleteByPk($id);
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        LoginForm::checkLogin();
        $this->pageTitle = "Family Planning Service Records";

        $model = new FamilyPlanningService('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['FamilyPlanningService'])) {
            $model->attributes = $_GET['FamilyPlanningService'];
            if (isset($_GET['FamilyPlanningService']['patient_family_name']))
                $model->patient_family_name = $_GET['FamilyPlanningService']['patient_family_name'];
        }

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return FamilyPlanningService the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = FamilyPlanningService::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param FamilyPlanningService $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'family-planning-service-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    protected function performAjaxValidation_details($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'family-planning-service-details-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
