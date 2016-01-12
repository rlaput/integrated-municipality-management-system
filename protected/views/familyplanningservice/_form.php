<?php
/* @var $this FamilyplanningserviceController */
/* @var $model FamilyPlanningService */
/* @var $form CActiveForm */

CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '<span class="text-danger">*</span>';
?>

<div class="well col-lg-12">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'family-planning-service-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => true,
        'htmlOptions' => array('class' => 'form-horizontal')
    ));
    ?>

    <fieldset>

        <legend><?php echo isset($title) ? $title : ""; ?></legend>

        <p class="note">Fields with <span class="required">*</span> are required.</p>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Client Record</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <?php echo $form->label($patient_model, 'Name', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($patient_model, 'patient_family_name', array('value' => $patient_model->getName(), 'size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($patient_model, 'address', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textArea($patient_model, 'address', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'style' => 'resize: none', 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'plan_more_children', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="radio">
                            <?php echo $form->radioButtonList($model, 'plan_more_children', ZHtml::enumItem($model, 'plan_more_children')); ?>
                        </div>
                        <?php echo $form->error($model, 'plan_more_children', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($model, 'reason_for_practicing_fp', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textArea($model, 'reason_for_practicing_fp', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'style' => 'resize: none')); ?>
                        <?php echo $form->error($model, 'reason_for_practicing_fp', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'type_of_acceptor', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="radio">
                            <?php echo $form->radioButtonList($model, 'type_of_acceptor', ZHtml::enumItem($model, 'type_of_acceptor')); ?>
                        </div>
                        <?php echo $form->error($model, 'type_of_acceptor', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($model, 'previous_method_used', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textArea($model, 'previous_method_used', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'style' => 'resize: none')); ?>
                        <?php echo $form->error($model, 'previous_method_used', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'spouse_name', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'spouse_name', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'spouse_name', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'spouse_date_of_birth', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dateField($model, 'spouse_date_of_birth', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'spouse_date_of_birth', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'spouse_highest_education', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'spouse_highest_education', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'spouse_highest_education', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'spouse_occupation', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'spouse_occupation', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'spouse_occupation', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'average_monthly_income', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'average_monthly_income', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'average_monthly_income', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'method_accepted', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($model, 'method_accepted', FamilyPlanningService::getAcceptedMethods()); ?>
                        </div>
                        <?php echo $form->error($model, 'method_accepted', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'other_method_accepted', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'other_method_accepted', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'other_method_accepted', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'chosen_method', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'chosen_method', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'chosen_method', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'fps_date', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dateField($model, 'fps_date', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'fps_date', array('class' => 'text-danger')); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Medical History</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <?php echo $form->labelEx($medical_history_model, 'heent', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($medical_history_model, 'heent', MedicalHistory::getHeent()); ?>
                        </div>
                        <?php echo $form->error($medical_history_model, 'heent', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($medical_history_model, 'chest_heart', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($medical_history_model, 'chest_heart', MedicalHistory::getChestHeart()); ?>
                        </div>
                        <?php echo $form->error($medical_history_model, 'chest_heart', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($medical_history_model, 'abdomen', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($medical_history_model, 'abdomen', MedicalHistory::getAbdomen()); ?>
                        </div>
                        <?php echo $form->error($medical_history_model, 'abdomen', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($medical_history_model, 'genital', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($medical_history_model, 'genital', MedicalHistory::getGenital()); ?>
                        </div>
                        <?php echo $form->error($medical_history_model, 'genital', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($medical_history_model, 'extremities', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($medical_history_model, 'extremities', MedicalHistory::getExtremities()); ?>
                        </div>
                        <?php echo $form->error($medical_history_model, 'extremities', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($medical_history_model, 'skin', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($medical_history_model, 'skin', MedicalHistory::getSkin()); ?>
                        </div>
                        <?php echo $form->error($medical_history_model, 'skin', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($medical_history_model, 'other_history', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($medical_history_model, 'other_history', MedicalHistory::getHistory()); ?>
                        </div>
                        <?php echo $form->error($medical_history_model, 'other_history', array('class' => 'text-danger')); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Obstetrical History</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <?php echo $form->labelEx($obstetrical_history_model, 'no_of_pregnancies', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($obstetrical_history_model, 'no_of_pregnancies', array('class' => 'form-control')); ?>
                        <?php echo $form->error($obstetrical_history_model, 'no_of_pregnancies', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($obstetrical_history_model, 'no_of_full_term', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($obstetrical_history_model, 'no_of_full_term', array('class' => 'form-control')); ?>
                        <?php echo $form->error($obstetrical_history_model, 'no_of_full_term', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($obstetrical_history_model, 'no_of_premature', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($obstetrical_history_model, 'no_of_premature', array('class' => 'form-control')); ?>
                        <?php echo $form->error($obstetrical_history_model, 'no_of_premature', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($obstetrical_history_model, 'no_of_abortions', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($obstetrical_history_model, 'no_of_abortions', array('class' => 'form-control')); ?>
                        <?php echo $form->error($obstetrical_history_model, 'no_of_abortions', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($obstetrical_history_model, 'no_of_living_children', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($obstetrical_history_model, 'no_of_living_children', array('class' => 'form-control')); ?>
                        <?php echo $form->error($obstetrical_history_model, 'no_of_living_children', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($obstetrical_history_model, 'last_delivery_date', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dateField($obstetrical_history_model, 'last_delivery_date', array('class' => 'form-control')); ?>
                        <?php echo $form->error($obstetrical_history_model, 'last_delivery_date', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($obstetrical_history_model, 'last_delivery_type', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($obstetrical_history_model, 'last_delivery_type', array('class' => 'form-control')); ?>
                        <?php echo $form->error($obstetrical_history_model, 'last_delivery_type', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($obstetrical_history_model, 'past_menstrual_period', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($obstetrical_history_model, 'past_menstrual_period', array('class' => 'form-control')); ?>
                        <?php echo $form->error($obstetrical_history_model, 'past_menstrual_period', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($obstetrical_history_model, 'last_menstrual_period', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($obstetrical_history_model, 'last_menstrual_period', array('class' => 'form-control')); ?>
                        <?php echo $form->error($obstetrical_history_model, 'last_menstrual_period', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($obstetrical_history_model, 'duration_character_of_menstrual_bleeding', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($obstetrical_history_model, 'duration_character_of_menstrual_bleeding', array('class' => 'form-control')); ?>
                        <?php echo $form->error($obstetrical_history_model, 'duration_character_of_menstrual_bleeding', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($obstetrical_history_model, 'other_history', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($obstetrical_history_model, 'other_history', ObstetricalHistory::getHistory()); ?>
                        </div>
                        <?php echo $form->error($obstetrical_history_model, 'other_history', array('class' => 'text-danger')); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Physical Examination</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <?php echo $form->labelEx($physical_examination_model, 'blood_pressure', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($physical_examination_model, 'blood_pressure', array('class' => 'form-control')); ?>
                        <?php echo $form->error($physical_examination_model, 'blood_pressure', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($physical_examination_model, 'physical_examination_weight', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($physical_examination_model, 'physical_examination_weight', array('class' => 'form-control')); ?>
                        <?php echo $form->error($physical_examination_model, 'physical_examination_weight', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($physical_examination_model, 'pulse_rate', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($physical_examination_model, 'pulse_rate', array('class' => 'form-control')); ?>
                        <?php echo $form->error($physical_examination_model, 'pulse_rate', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($physical_examination_model, 'conjunctiva', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($physical_examination_model, 'conjunctiva', PhysicalExamination::getConjunctiva()); ?>
                        </div>
                        <?php echo $form->error($physical_examination_model, 'conjunctiva', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($physical_examination_model, 'neck', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($physical_examination_model, 'neck', PhysicalExamination::getNeck()); ?>
                        </div>
                        <?php echo $form->error($physical_examination_model, 'neck', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($physical_examination_model, 'breast', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($physical_examination_model, 'breast', PhysicalExamination::getBreast()); ?>
                        </div>
                        <?php echo $form->error($physical_examination_model, 'breast', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($physical_examination_model, 'thorax', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($physical_examination_model, 'thorax', PhysicalExamination::getThorax()); ?>
                        </div>
                        <?php echo $form->error($physical_examination_model, 'thorax', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($physical_examination_model, 'abdomen', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($physical_examination_model, 'abdomen', PhysicalExamination::getAbdomen()); ?>
                        </div>
                        <?php echo $form->error($physical_examination_model, 'abdomen', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($physical_examination_model, 'extremities', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($physical_examination_model, 'extremities', PhysicalExamination::getExtremities()); ?>
                        </div>
                        <?php echo $form->error($physical_examination_model, 'extremities', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($physical_examination_model, 'others', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($physical_examination_model, 'others', array('class' => 'form-control')); ?>
                        <?php echo $form->error($physical_examination_model, 'others', array('class' => 'text-danger')); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Pelvic Examination</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <?php echo $form->labelEx($pelvic_examination_model, 'perenium', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($pelvic_examination_model, 'perenium', PelvicExamination::getPerenium()); ?>
                        </div>
                        <?php echo $form->error($pelvic_examination_model, 'perenium', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($pelvic_examination_model, 'vagina', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($pelvic_examination_model, 'vagina', PelvicExamination::getVagina()); ?>
                        </div>
                        <?php echo $form->error($pelvic_examination_model, 'vagina', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($pelvic_examination_model, 'cervix', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($pelvic_examination_model, 'cervix', PelvicExamination::getCervix()); ?>
                        </div>
                        <?php echo $form->error($pelvic_examination_model, 'cervix', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($pelvic_examination_model, 'cervix_color', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($pelvic_examination_model, 'cervix_color', PelvicExamination::getCervixColor()); ?>
                        </div>
                        <?php echo $form->error($pelvic_examination_model, 'cervix_color', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($pelvic_examination_model, 'cervix_consistency', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($pelvic_examination_model, 'cervix_consistency', PelvicExamination::getCervixConsistency()); ?>
                        </div>
                        <?php echo $form->error($pelvic_examination_model, 'cervix_consistency', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($pelvic_examination_model, 'uterus_position', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($pelvic_examination_model, 'uterus_position', PelvicExamination::getUterusPosition()); ?>
                        </div>
                        <?php echo $form->error($pelvic_examination_model, 'uterus_position', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($pelvic_examination_model, 'uterus_size', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($pelvic_examination_model, 'uterus_size', PelvicExamination::getUterusSize()); ?>
                        </div>
                        <?php echo $form->error($pelvic_examination_model, 'uterus_size', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($pelvic_examination_model, 'uterus_mass', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dropDownList($pelvic_examination_model, 'uterus_mass', PelvicExamination::getUterusMass(), array('class' => 'form-control')); ?>
                        <?php echo $form->error($pelvic_examination_model, 'uterus_mass', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($pelvic_examination_model, 'uterine_depth', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($pelvic_examination_model, 'uterine_depth', array('class' => 'form-control')); ?>
                        <?php echo $form->error($pelvic_examination_model, 'uterine_depth', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($pelvic_examination_model, 'uterus_adnexa', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($pelvic_examination_model, 'uterus_adnexa', PelvicExamination::getUterusAdnexa()); ?>
                        </div>
                        <?php echo $form->error($pelvic_examination_model, 'uterus_adnexa', array('class' => 'text-danger')); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-8 col-sm-offset-4">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-success')); ?>
            </div>
        </div>

    </fieldset>

    <?php $this->endWidget(); ?>

</div><!-- form -->