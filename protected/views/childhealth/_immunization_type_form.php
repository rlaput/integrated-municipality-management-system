<?php
/* @var $this ImmunizationTypeController */
/* @var $model ImmunizationType */
/* @var $form CActiveForm */
CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '<span class="text-danger">*</span>';
?> 
<div class="well col-lg-12">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'immunization-type-form',
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
            <?php echo $form->labelEx($model, 'session', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'session', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'session', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'bcg', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'bcg', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'bcg', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'hep_bv', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'hep_bv', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'hep_bv', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'dpt', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'dpt', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'dpt', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'opv', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'opv', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'opv', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'amv', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'amv', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'amv', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'mmr', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'mmr', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'mmr', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group"> 
            <?php echo $form->labelEx($model, 'pentavalent', array('class' => 'control-label col-sm-4')); ?>
            <div class="col-sm-8">
                <?php echo $form->textField($model, 'pentavalent', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'pentavalent', array('class' => 'text-danger')); ?>
            </div> 
        </div> 

        <div class="form-group">
            <div class="col-sm-8 col-sm-offset-4">
                <?php
                echo CHtml::ajaxSubmitButton("Add", CHtml::normalizeUrl(array('childhealth/addimmunizationtype', 'render' => false)), array('dataType' => 'json',
                    'success' => 'function(data) {
                        if(data != null && data.status == "success") {
                            $("#it-dialog").dialog("close");
                            location.reload();
                        }
                    }'), array('class' => 'btn btn-success', 'id' => 'closeItDialog'));
                ?>
            </div> 
        </div> 

    </fieldset>
    <?php $this->endWidget(); ?>

</div><!-- form -->