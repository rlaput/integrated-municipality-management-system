<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->breadcrumbs = array(
    'Login',
);
?>

<div class="well" style="max-width: 500px;margin: 0 auto">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        'htmlOptions' => array('class' => 'form-horizontal'),
    ));
    ?>            
    <fieldset>
        <legend>Login</legend>
        <div class="form-group">
            <?php echo $form->label($model, 'username', array('class' => 'col-lg-2 control-label')); ?>
            <div class="col-lg-10">
                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'placeholder' => 'Username')); ?>
                <?php echo $form->error($model, 'username', array('class' => 'text-danger')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->label($model, 'password', array('class' => 'col-lg-2 control-label')); ?>
            <div class="col-lg-10">
                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'placeholder' => 'Password')); ?>
                <?php echo $form->error($model, 'password', array('class' => 'text-danger')); ?>            </div>
        </div>
        <div class="col-lg-10 col-lg-offset-2">
            <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary')); ?>
        </div>
    </fieldset>
</div>



<?php $this->endWidget(); ?>
