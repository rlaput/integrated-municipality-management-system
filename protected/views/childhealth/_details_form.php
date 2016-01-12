<?php
/* @var $this ChildHealthDetailsController */
/* @var $model ChildHealthDetails */
/* @var $form CActiveForm */
CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '<span class="text-danger">*</span>';
?> 
<div class="well col-lg-12">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'child-health-details-form',
        // Please note: When you enable ajax validation, make sure the corresponding 
        // controller action is handling ajax validation correctly. 
        // See class documentation of CActiveForm for details on this, 
        // you need to use the performAjaxValidation()-method described there. 
        'enableAjaxValidation' => true,
        'htmlOptions' => array('class' => 'form-horizontal')
    ));
    ?>
    <fieldset>
        <legend>Immunization Type Form</legend>
        <p class="note">Fields with <span class="required">*</span> are required.</p> 
        <?php echo $form->hiddenField($model, 'child_health_record_id', array('value' => $child_health_record_id)); ?>

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'date', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->dateField($model, 'date', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'date', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'age', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->numberField($model, 'age', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'age', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'recorded_weight', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->numberField($model, 'recorded_weight', array('step' => '0.01', 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'recorded_weight', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'temperature', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->numberField($model, 'temperature', array('step' => '0.01', 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'temperature', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'recorded_height', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->numberField($model, 'recorded_height', array('step' => '0.01', 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'recorded_height', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'findings', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textArea($model, 'findings', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'findings', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'notes', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textArea($model, 'notes', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'notes', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group">
            <div class="col-sm-8 col-sm-offset-4">
                <?php
                echo CHtml::ajaxSubmitButton("Add", CHtml::normalizeUrl(array('childhealth/adddetails', 'render' => false)), array('dataType' => 'json',
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
