<?php
/* @var $this SputumExaminationResultsController */
/* @var $model SputumExaminationResults */
/* @var $form CActiveForm */
CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '<span class="text-danger">*</span>';
?> 

<div class="well col-lg-12">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'ser-form',
        // Please note: When you enable ajax validation, make sure the corresponding 
        // controller action is handling ajax validation correctly. 
        // There is a call to performAjaxValidation() commented in generated controller code. 
        // See class documentation of CActiveForm for details on this. 
        'enableAjaxValidation' => true,
        'htmlOptions' => array('class' => 'form-horizontal')
    ));
    ?>
    <fieldset>
        <legend>Laboratory Test</legend>
        <p class="note">Fields with <span class="required">*</span> are required.</p> 
        <?php echo $form->hiddenField($model, 'ntp_treatment_card_id', array('value' => $ntp_treatment_card_id)); ?>

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'month', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'month', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'month', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'due_date', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->dateField($model, 'due_date', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'due_date', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'date_examined', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->dateField($model, 'date_examined', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'date_examined', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'result', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textArea($model, 'result', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'result', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'sputum_weight', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'sputum_weight', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'sputum_weight', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group">
            <div class="col-sm-8 col-sm-offset-4">
                <?php
                echo CHtml::ajaxSubmitButton("Add", CHtml::normalizeUrl(array('ntptreatmentcard/addser', 'render' => false)), array('dataType' => 'json',
                    'success' => 'function(data) {
                        if(data != null && data.status == "success") {
                            $("#ser-dialog").dialog("close");
                            location.reload();
                        }
                    }'), array('class' => 'btn btn-success', 'id' => 'closeSerDialog'));
                ?>
            </div> 
        </div> 

    </fieldset>
    <?php $this->endWidget(); ?>

</div><!-- form -->