<?php
/* @var $this MaternalhealthController */
/* @var $model MaternalHealth */
/* @var $form CActiveForm */

CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '<span class="text-danger">*</span>';
?>

<div class="well col-lg-12">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'maternal-health-form',
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
                    <?php echo $form->label($patient_model, 'patient_birthdate', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dateField($patient_model, 'patient_birthdate', array('class' => 'form-control', 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($patient_model, 'family_no', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($patient_model, 'family_no', array('class' => 'form-control', 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'husband_name', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'husband_name', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'husband_name', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'husband_occupation', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'husband_occupation', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'husband_occupation', array('class' => 'text-danger')); ?>
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
                    <?php echo $form->labelEx($model, 'no_of_children_born_alive', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'no_of_children_born_alive', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'no_of_children_born_alive', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'no_of_abortion', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'no_of_abortion', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'no_of_abortion', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'no_of_stillbirths_fetal_deaths', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'no_of_stillbirths_fetal_deaths', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'no_of_stillbirths_fetal_deaths', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'last_delivery_type', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'last_delivery_type', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'last_delivery_type', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'large_babies_history', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'large_babies_history', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'large_babies_history', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'diabetes_history', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'diabetes_history', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'diabetes_history', array('class' => 'text-danger')); ?>
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
                    <?php echo $form->labelEx($model, 'previous_illness', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'previous_illness', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'previous_illness', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'allergy', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'allergy', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'allergy', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'previous_hospitalization', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'previous_hospitalization', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'previous_hospitalization', array('class' => 'text-danger')); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Tetanus Toxoid Status</h3>
            </div>
            <div class="panel-body">

            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Laboratory Exams</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'urinalysis', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'urinalysis', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'urinalysis', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'cbc', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'cbc', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'cbc', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'hbs_antigen', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'hbs_antigen', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'hbs_antigen', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'prevoius_pregnancy_complication', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textArea($model, 'prevoius_pregnancy_complication', array('class' => 'form-control', 'rows' => 6, 'cols' => 50, 'class' => 'form-control', 'style' => 'resize: none')); ?>
                        <?php echo $form->error($model, 'prevoius_pregnancy_complication', array('class' => 'text-danger')); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Present Pregnancy</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'gravida', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'gravida', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'gravida', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'para', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'para', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'para', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'a', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'a', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'a', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'stillbirth', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'stillbirth', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'stillbirth', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'cmp', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'cmp', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'cmp', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'edc', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'edc', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'edc', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-4 control-label">
                        <?php echo "<label>Plan of delivery: </label>"; ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'where_to_deliver', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'where_to_deliver', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'where_to_deliver', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'to_be_attended_by', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'to_be_attended_by', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'to_be_attended_by', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'plan_to_submit', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'plan_to_submit', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'plan_to_submit', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'risk_codes', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'risk_codes', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'risk_codes', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                A = age less than 18 or greater than 35<br/>
                                B = height less than 145 cm<br/>
                                C = having a Fourth (or more) pregnancy<br/>
                                D = has one or more of the ff:<br/>
                                &emsp;a) previous cesarian section<br/>
                                &emsp;b) 3 consecutive miscarriages of stillborn baby<br/>
                                &emsp;c) postparium hemmorhage<br/>
                                E = having one or more conditions:<br/>
                                &emsp;1) Tuberculosis<br/>
                                &emsp;2) Heart Disease<br/>
                                &emsp;3) Diabetes<br/>
                                &emsp;4) Bronchial Asthma<br/>
                                &emsp;5) Goiter<br/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'pregnancy_terminated_date', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dateField($model, 'pregnancy_terminated_date', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'pregnancy_terminated_date', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'outcome', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'outcome', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'outcome', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'birthwt', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'birthwt', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'birthwt', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'attended_by', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'attended_by', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'attended_by', array('class' => 'text-danger')); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Checklist</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'checklist', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <div class="checkbox">
                            <?php echo $form->checkBoxList($model, 'checklist', MaternalHealth::getChecklist()); ?>
                        </div>
                        <?php echo $form->error($model, 'checklist', array('class' => 'text-danger')); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Micronutrient Supplementation</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <div class="col-sm-4 control-label">
                        <?php echo "<label>Vit A (10,000 IU)</label>"; ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'vit_a_date_given', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dateField($model, 'vit_a_date_given', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'vit_a_date_given', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'vit_a_prescribed', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'vit_a_prescribed', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'vit_a_prescribed', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-4 control-label">
                        <?php echo "<label>Iron w/ Folic</label>"; ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'iron_folic_date_given', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dateField($model, 'iron_folic_date_given', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'iron_folic_date_given', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'iron_folic_prescribed', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'iron_folic_prescribed', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'iron_folic_prescribed', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'iron_folic_month', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textArea($model, 'iron_folic_month', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'style' => 'resize: none')); ?>
                        <?php echo $form->error($model, 'iron_folic_month', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-4 control-label">
                        <?php echo "<label>Mebendazole tab 500 mg./Albendazole 400 mg.</label>"; ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'mebendazole_date_given', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dateField($model, 'mebendazole_date_given', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'mebendazole_date_given', array('class' => 'text-danger')); ?>
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