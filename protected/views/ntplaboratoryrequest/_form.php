<?php
/* @var $this NtplaboratoryrequestController */
/* @var $model NtpLaboratoryRequest */
/* @var $form CActiveForm */

CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '<span class="text-danger">*</span>';
?>

<div class="well col-lg-12">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'ntp-laboratory-request-form',
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
                <h3 class="panel-title">To be filled up by Health Worker</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'collection_unit_name', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'collection_unit_name', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'collection_unit_name', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'submission_date', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dateField($model, 'submission_date', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'submission_date', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($patient_model, 'Name', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($patient_model, 'patient_family_name', array('value' => $patient_model->getName(), 'class' => 'form-control', 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($patient_model, 'gender', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($patient_model, 'patient_family_name', array('value' => $patient_model->gender, 'class' => 'form-control', 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($patient_model, 'address', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textArea($patient_model, 'address', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'style' => 'resize: none', 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'disease_classification', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dropDownList($model, 'disease_classification', NtpLaboratoryRequest::getDiseaseClassifications(), array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'disease_classification', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'site', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'site', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'site', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'reason_for_examination', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dropDownList($model, 'reason_for_examination', NtpLaboratoryRequest::getReasonsForExamination(), array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'reason_for_examination', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'tb_case_no', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'tb_case_no', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'tb_case_no', array('class' => 'text-danger')); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">To be filled up by Medical Technologist or Microscopist</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'date_received', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dateField($model, 'date_received', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'date_received', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'lab_serial_no', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'lab_serial_no', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'lab_serial_no', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'examination_date', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->dateField($model, 'examination_date', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'examination_date', array('class' => 'text-danger')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'examined_by', array('class' => 'control-label col-sm-4')); ?>
                    <div class="col-sm-8">
                        <?php echo $form->textField($model, 'examined_by', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'examined_by', array('class' => 'text-danger')); ?>
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