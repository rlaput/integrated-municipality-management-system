<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
    'htmlOptions' => array('class' => 'form-horizontal')
        ));
?>

<div class="form-group">
    <?php echo $form->label($model, 'username', array('class' => 'control-label col-sm-3')); ?>                            
    <div class="col-sm-9">
        <?php echo $form->textField($model, 'username', array('size' => 15, 'maxlength' => 15, 'class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'family_name', array('class' => 'control-label col-sm-3')); ?>                            
    <div class="col-sm-9">
        <?php echo $form->textField($model, 'family_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'first_name', array('class' => 'control-label col-sm-3')); ?>                            
    <div class="col-sm-9">
        <?php echo $form->textField($model, 'first_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'middle_name', array('class' => 'control-label col-sm-3')); ?>                            
    <div class="col-sm-9">
        <?php echo $form->textField($model, 'middle_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'position', array('class' => 'control-label col-sm-3')); ?>                            
    <div class="col-sm-9">
        <?php echo $form->dropDownList($model, 'position', User::getPositions(), array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-success')); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
