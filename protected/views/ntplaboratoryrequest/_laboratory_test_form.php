<?php
/* @var $this LaboratoryTestController */
/* @var $model LaboratoryTest */
/* @var $form CActiveForm */
CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '<span class="text-danger">*</span>';
?> 

<div class="well col-lg-12">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'lt-form',
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
        <?php echo $form->hiddenField($model, 'ntp_laboratory_request_id', array('value' => $ntp_laboratory_request_id)); ?>

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'visual_appearance', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'visual_appearance', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'visual_appearance', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'reading', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'reading', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'reading', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'laboratory_diagnosis', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'laboratory_diagnosis', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'laboratory_diagnosis', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'collection_date', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->dateField($model, 'collection_date', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'collection_date', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group">
            <div class="col-sm-8 col-sm-offset-4">
                <?php
                echo CHtml::ajaxSubmitButton("Add", CHtml::normalizeUrl(array('ntplaboratoryrequest/addlt', 'render' => false)), array('dataType' => 'json',
                    'success' => 'function(data) {
                        if(data != null && data.status == "success") {
                            $("#lt-dialog").dialog("close");
                            location.reload();
                        }
                    }'), array('class' => 'btn btn-success', 'id' => 'closeLtDialog'));
                ?>
            </div> 
        </div> 
    </fieldset>
    <?php $this->endWidget(); ?>

</div><!-- form -->