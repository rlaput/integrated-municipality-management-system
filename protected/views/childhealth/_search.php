<?php
/* @var $this ChildhealthController */
/* @var $model ChildHealth */
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
    <?php echo $form->label($model, 'patient_family_name', array('class' => 'control-label col-sm-4')); ?>
    <div class="col-sm-8">
        <?php echo $form->textField($model, 'patient_family_name', array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'ufc_no', array('class' => 'control-label col-sm-4')); ?>
    <div class="col-sm-8">
        <?php echo $form->textField($model, 'ufc_no', array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'place_of_delivery', array('class' => 'control-label col-sm-4')); ?>
    <div class="col-sm-8">
        <?php echo $form->dropDownList($model, 'place_of_delivery', ChildHealth::getPlaceOfDelivery(), array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'mothers_name', array('class' => 'control-label col-sm-4')); ?>
    <div class="col-sm-8">
        <?php echo $form->textField($model, 'mothers_name', array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <?php echo $form->label($model, 'fathers_name', array('class' => 'control-label col-sm-4')); ?>
    <div class="col-sm-8">
        <?php echo $form->textField($model, 'fathers_name', array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-offset-4 col-lg-8">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-success')); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
