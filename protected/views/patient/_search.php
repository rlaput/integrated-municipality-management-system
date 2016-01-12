<?php
/* @var $this PatientController */
/* @var $model Patient */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
    'htmlOptions' => array('class' => 'form-horizontal')
        ));
?>

<div class="row">
    <div class="col-lg-6">

        <div class="form-group">
            <?php echo $form->label($model, 'patient_family_name', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'patient_family_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->label($model, 'patient_first_name', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'patient_first_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->label($model, 'patient_middle_name', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'patient_middle_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->label($model, 'address', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'address', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            </div>
        </div>



    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <?php echo $form->label($model, 'gender', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->dropDownList($model, 'gender', Patient::getGenders(), array('class' => 'form-control')); ?>
            </div>
        </div>


        <div class="form-group">
            <?php echo $form->label($model, 'occupation', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'occupation', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->label($model, 'family_no', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'family_no', array('class' => 'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo $form->label($model, 'marital_status', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <?php echo $form->textField($model, 'marital_status', array('size' => 31, 'maxlength' => 31, 'class' => 'form-control')); ?>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="form-group">
        <div class="col-sm-12" style="text-align: center">
            <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-success')); ?>
        </div>
    </div>
</div>

<?php $this->endWidget(); ?>
