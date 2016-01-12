<?php
/* @var $this MaternalHealthDetailsController */
/* @var $model MaternalHealthDetails */
/* @var $form CActiveForm */
CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '<span class="text-danger">*</span>';
?> 

<div class="well col-lg-12">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'details-form',
        // Please note: When you enable ajax validation, make sure the corresponding 
        // controller action is handling ajax validation correctly. 
        // There is a call to performAjaxValidation() commented in generated controller code. 
        // See class documentation of CActiveForm for details on this. 
        'enableAjaxValidation' => true,
        'htmlOptions' => array('class' => 'form-horizontal')
    ));
    ?>

    <fieldset>
        <legend>Maternal Health Details</legend>
        <p class="note">Fields with <span class="required">*</span> are required.</p> 
        <?php echo $form->hiddenField($model, 'maternal_health_record_id', array('value' => $maternal_health_record_id)); ?>

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'date', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->dateField($model, 'date', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'date', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'aog', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'aog', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'aog', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'maternal_weight', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'maternal_weight', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'maternal_weight', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'bp', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'bp', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'bp', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'fh', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'fh', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'fh', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'fhb', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'fhb', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'fhb', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'presenting_part_of_fetus', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'presenting_part_of_fetus', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'presenting_part_of_fetus', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'findings', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textArea($model, 'findings', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'findings', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'nurses_notes', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textArea($model, 'nurses_notes', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'nurses_notes', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group">
            <div class="col-sm-8 col-sm-offset-4">
                <?php
                echo CHtml::ajaxSubmitButton("Add", CHtml::normalizeUrl(array('maternalhealth/adddetails', 'render' => false)), array('dataType' => 'json',
                    'success' => 'function(data) {
                        if(data != null && data.status == "success") {
                            $("#details-dialog").dialog("close");
                            location.reload();
                        }
                    }'), array('class' => 'btn btn-success', 'id' => 'closeDetailsDialog'));
                ?>
            </div> 
        </div> 
    </fieldset>
    <?php $this->endWidget(); ?>

</div><!-- form -->