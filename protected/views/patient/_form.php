<?php
/* @var $this PatientController */
/* @var $model Patient */
/* @var $form CActiveForm */

CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '*';
?>

<div class="well col-lg-8">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'patient-form',
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

        <div class="form-group">
            <?php echo $form->labelEx($model, 'patient_family_name', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'patient_family_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'patient_family_name', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'patient_first_name', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'patient_first_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'patient_first_name', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'patient_middle_name', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'patient_middle_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'patient_middle_name', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'address', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textArea($model, 'address', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'style' => 'resize: none')); ?>
                <?php echo $form->error($model, 'address', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'contact_no', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'contact_no', array('size' => 15, 'maxlength' => 15, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'contact_no', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'gender', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->dropDownList($model, 'gender', ZHtml::enumItem($model, 'gender'), array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'gender', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'height', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'height', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'height', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'weight', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'weight', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'weight', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'occupation', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'occupation', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'occupation', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'family_no', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'family_no', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'family_no', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'marital_status', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'marital_status', array('size' => 31, 'maxlength' => 31, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'marital_status', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'patient_birthdate', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->dateField($model, 'patient_birthdate', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'patient_birthdate', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-success')); ?>
            </div>
        </div>
        
    </fieldset>

    <?php $this->endWidget(); ?>

</div>