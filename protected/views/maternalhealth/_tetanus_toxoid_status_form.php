<?php
/* @var $this TetanusToxoidStatusController */
/* @var $model TetanusToxoidStatus */
/* @var $form CActiveForm */
CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '<span class="text-danger">*</span>';
?> 

<div class="well col-lg-12">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'tts-form',
        // Please note: When you enable ajax validation, make sure the corresponding 
        // controller action is handling ajax validation correctly. 
        // See class documentation of CActiveForm for details on this, 
        // you need to use the performAjaxValidation()-method described there. 
        'enableAjaxValidation' => true,
        'htmlOptions' => array('class' => 'form-horizontal')
    ));
    ?>
    <fieldset>
        <legend>Tetanus Toxoid Status</legend>
        <p class="note">Fields with <span class="required">*</span> are required.</p> 
        <?php echo $form->hiddenField($model, 'maternal_health_record_id', array('value' => $maternal_health_record_id)); ?>

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'tt', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'tt', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'tt', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group">  
            <?php echo $form->labelEx($model, 'date', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->dateField($model, 'date', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'date', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group">
            <div class="col-sm-8 col-sm-offset-4">
                <?php
                echo CHtml::ajaxSubmitButton("Add", CHtml::normalizeUrl(array('maternalhealth/addtts', 'render' => false)), array('dataType' => 'json',
                    'success' => 'function(data) {
                        if(data != null && data.status == "success") {
                            $("#tts-dialog").dialog("close");
                            location.reload();
                        }
                    }'), array('class' => 'btn btn-success', 'id' => 'closeTtsDialog'));
                ?>
            </div> 
        </div> 
    </fieldset>
    <?php $this->endWidget(); ?>

</div><!-- form -->