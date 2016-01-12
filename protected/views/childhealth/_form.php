<?php
/* @var $this ChildhealthController */
/* @var $model ChildHealth */
/* @var $form CActiveForm */

CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '<span class="text-danger">*</span>';
?>

<div class="well col-lg-12">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'child-health-form',
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
            <?php echo $form->label($patient_model, 'Name', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($patient_model, 'patient_family_name', array('value' => $patient_model->getName(), 'size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'disabled' => 'disabled')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->label($patient_model, 'family_no', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($patient_model, 'family_no', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'disabled' => 'disabled')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'ufc_no', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'ufc_no', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'ufc_no', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->label($patient_model, 'gender', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($patient_model, 'gender', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'disabled' => 'disabled')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->label($patient_model, 'patient_birthdate', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->dateField($patient_model, 'patient_birthdate', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'disabled' => 'disabled')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'birth_order', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'birth_order', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'birth_order', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'place_of_delivery', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8 radio">
                <?php echo $form->radioButtonList($model, 'place_of_delivery', ZHtml::enumItem($model, 'place_of_delivery'), array('size' => 60, 'maxlength' => 255)); ?>
                <?php echo $form->error($model, 'place_of_delivery', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'mothers_name', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'mothers_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'mothers_name', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'mothers_age', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'mothers_age', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'mothers_age', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'mothers_occupation', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'mothers_occupation', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'mothers_occupation', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'fathers_name', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'fathers_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'fathers_name', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'fathers_age', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'fathers_age', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'fathers_age', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'fathers_occupation', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'fathers_occupation', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'fathers_occupation', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->label($patient_model, 'address', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textArea($patient_model, 'address', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'style' => 'resize: none', 'disabled' => 'disabled')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'feeding_type', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'feeding_type', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'feeding_type', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'date_referred_for_newborn_screening', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->dateField($model, 'date_referred_for_newborn_screening', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'date_referred_for_newborn_screening', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'child_protected_at_birth', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'child_protected_at_birth', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'child_protected_at_birth', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'date_assessed', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->dateField($model, 'date_assessed', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'date_assessed', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'anemic_children_mos_seen', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'anemic_children_mos_seen', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'anemic_children_mos_seen', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'anemic_children_mos_given_iron', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'anemic_children_mos_given_iron', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'anemic_children_mos_given_iron', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'birth_weight', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'birth_weight', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'birth_weight', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'low_birth_weight_seen', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'low_birth_weight_seen', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'low_birth_weight_seen', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'low_birth_weight_given_iron', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'low_birth_weight_given_iron', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'low_birth_weight_given_iron', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'date_iron_started', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->dateField($model, 'date_iron_started', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'date_iron_started', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'date_iron_completed', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->dateField($model, 'date_iron_completed', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'date_iron_completed', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'vit_a_given', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textArea($model, 'vit_a_given', array('rows' => 6, 'cols' => 50, 'class' => 'form-control', 'style' => 'resize: none')); ?>
                <?php echo $form->error($model, 'vit_a_given', array('class' => 'text-danger')); ?>
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