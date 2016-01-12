<?php
/* @var $this NtptreatmentcardController */
/* @var $model NtpTreatmentCard */
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
    <?php echo $form->label($model, 'date_opened', array('class' => 'control-label col-sm-4')); ?>
    <div class="col-sm-8">
        <?php echo $form->dateField($model, 'date_opened', array('class' => 'form-control')); ?>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-offset-4 col-lg-8">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-success')); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
