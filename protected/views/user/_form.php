<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */

CHtml::$afterRequiredLabel = '';
CHtml::$beforeRequiredLabel = '*';
?>

<div class="well col-lg-8">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-form',
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

        <?php if ($model->isNewRecord || $model->id == LoginForm::getUser()->id) { ?>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-sm-3')); ?>            
                <div class="col-sm-9">
                    <?php echo $form->textField($model, 'username', array('maxlength' => 15, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'username', array('class' => 'text-danger')); ?>
                </div>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-sm-3')); ?>            
                <div class="col-sm-9">
                    <?php echo $form->passwordField($model, 'password', array('value' => '', 'maxlength' => 45, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'password', array('class' => 'text-danger')); ?>
                </div>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'password_repeat', array('class' => 'control-label col-sm-3')); ?>            
                <div class="col-sm-9">
                    <?php echo $form->passwordField($model, 'password_repeat', array('value' => '', 'maxlength' => 255, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'password_repeat', array('class' => 'text-danger')); ?>
                </div>
            </div>
        <?php } ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'family_name', array('class' => 'control-label col-sm-3')); ?>            
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'family_name', array('maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'family_name', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'first_name', array('class' => 'control-label col-sm-3')); ?>            
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'first_name', array('maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'first_name', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'middle_name', array('class' => 'control-label col-sm-3')); ?>            
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'middle_name', array('maxlength' => 255, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'middle_name', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'position', array('class' => 'control-label col-sm-3')); ?>            
            <div class="col-sm-9">
                <?php echo $form->dropDownList($model, 'position', ZHtml::enumItem($model, 'position'), array('maxlength' => 22, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'position', array('class' => 'text-danger')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'birthdate', array('class' => 'control-label col-sm-3')); ?>            
            <div class="col-sm-9">
                <?php echo $form->dateField($model, 'birthdate', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'birthdate', array('class' => 'text-danger')); ?>
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