<?php
/* @var $this ExclusiveBfCheckController */
/* @var $model ExclusiveBfCheck */
/* @var $form CActiveForm */
CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '<span class="text-danger">*</span>';
?> 
<div class="well col-lg-12">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'exclusive-bf-check-form',
        // Please note: When you enable ajax validation, make sure the corresponding 
        // controller action is handling ajax validation correctly. 
        // See class documentation of CActiveForm for details on this, 
        // you need to use the performAjaxValidation()-method described there. 
        'enableAjaxValidation' => true,
        'htmlOptions' => array('class' => 'form-horizontal')
    ));
    ?>
    <fieldset>
        <legend>EBFC Form</legend>
        <p class="note">Fields with <span class="required">*</span> are required.</p> 
        <?php echo $form->hiddenField($model, 'child_health_record_id', array('value' => $child_health_record_id)); ?>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'no', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->numberField($model, 'no', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'no', array('class' => 'text-danger')); ?>
            </div> 
        </div> 
        <div class="form-group">
            <?php echo $form->labelEx($model, 'check_date', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->dateField($model, 'check_date', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'check_date', array('class' => 'text-danger')); ?>
            </div> 
        </div> 
        <div class="form-group">
            <div class="col-sm-8 col-sm-offset-4">
                <?php
                echo CHtml::ajaxSubmitButton("Add", CHtml::normalizeUrl(array('childhealth/addexclusivebfcheck', 'render' => false)), array('dataType' => 'json',
                    'success' => 'function(data) {
                        if(data != null && data.status == "success") {
                            $("#ebfc-dialog").dialog("close");
                            location.reload();
                        }
                    }'), array('class' => 'btn btn-success', 'id' => 'closeEbfcDialog'));
                ?>
            </div> 
        </div> 
    </fieldset>
    <?php $this->endWidget(); ?>
</div><!-- form -->