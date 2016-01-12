<?php
/* @var $this NtptreatmentcardController */
/* @var $model NtpTreatmentCard */
/* @var $form CActiveForm */

CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '<span class="text-danger">*</span>';
?>

<div class="well col-lg-12">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'ntp-treatment-card-form',
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
                <h3 class="panel-title">NTP Treatment Card</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tb_case_no', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'tb_case_no', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'tb_case_no', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'date_opened', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dateField($model, 'date_opened', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'date_opened', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'dots_facility_name', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'dots_facility_name', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'dots_facility_name', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($patient_model, 'Name', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($patient_model, 'patient_family_name', array('value' => $patient_model->getName(), 'class' => 'form-control', 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($patient_model, 'Occupation', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($patient_model, 'occupation', array('value' => $patient_model->occupation, 'class' => 'form-control', 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($patient_model, 'gender', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($patient_model, 'patient_family_name', array('value' => $patient_model->gender, 'class' => 'form-control', 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($patient_model, 'contact_no', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($patient_model, 'contact_no', array('value' => $patient_model->contact_no, 'class' => 'form-control', 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($patient_model, 'address', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textArea($patient_model, 'address', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'style' => 'resize: none', 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'bcg_scar', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8 radio">
                        <?php echo $form->radioButtonList($model, 'bcg_scar', ZHtml::enumItem($model, 'bcg_scar')); ?>
                        <?php echo $form->error($model, 'bcg_scar', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'contact_person', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'contact_person', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'contact_person', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'contact_person_no', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'contact_person_no', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'contact_person_no', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'source_of_patient', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8 radio">
                        <?php echo $form->radioButtonList($model, 'source_of_patient', ZHtml::enumItem($model, 'source_of_patient')); ?>
                        <?php echo $form->error($model, 'source_of_patient', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'name_of_reffering_physician', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'name_of_reffering_physician', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'name_of_reffering_physician', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'history_of_anti_tb_drug_intake', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8 radio">
                        <?php echo $form->radioButtonList($model, 'history_of_anti_tb_drug_intake', ZHtml::enumItem($model, 'history_of_anti_tb_drug_intake')); ?>
                        <?php echo $form->error($model, 'history_of_anti_tb_drug_intake', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'duration', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8 radio">
                        <?php echo $form->radioButtonList($model, 'duration', ZHtml::enumItem($model, 'duration')); ?>
                        <?php echo $form->error($model, 'duration', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'specify_drugs', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'specify_drugs', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'specify_drugs', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'when', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'when', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'when', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'where', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'where', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'where', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'smear_status', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'smear_status', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'smear_status', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'no_of_household_contacts', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'no_of_household_contacts', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'no_of_household_contacts', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'classification_of_tb', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8 radio">
                        <?php echo $form->radioButtonList($model, 'classification_of_tb', ZHtml::enumItem($model, 'classification_of_tb')); ?>
                        <?php echo $form->error($model, 'classification_of_tb', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tb_site', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'tb_site', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'tb_site', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'type_of_patient', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($model, 'type_of_patient', NtpTreatmentCard::getTypesOfPatient()); ?>
                        </div>
                        <?php echo $form->error($model, 'type_of_patient', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'category_1', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($model, 'category_1', NtpTreatmentCard::getCategory1()); ?>
                        </div>
                        <?php echo $form->error($model, 'category_1', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'category_2', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($model, 'category_2', NtpTreatmentCard::getCategory2()); ?>
                        </div>
                        <?php echo $form->error($model, 'category_2', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'category_3', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($model, 'category_3', NtpTreatmentCard::getCategory3()); ?>
                        </div>
                        <?php echo $form->error($model, 'category_3', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'treatment_started', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dateField($model, 'treatment_started', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'treatment_started', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tbdc_findings_and_recommendations', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textArea($model, 'tbdc_findings_and_recommendations', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'style' => 'resize: none')); ?>
                        <?php echo $form->error($model, 'tbdc_findings_and_recommendations', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'chest_xray', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textArea($model, 'chest_xray', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'style' => 'resize: none')); ?>
                        <?php echo $form->error($model, 'chest_xray', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'name_of_treatment_partner', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'name_of_treatment_partner', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'name_of_treatment_partner', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'designation_of_treatment_partner', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'designation_of_treatment_partner', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'designation_of_treatment_partner', array('class' => 'text-danger')); ?>
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

</div>