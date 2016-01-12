<?php
/* @var $this NtplaboratoryrequestController */
/* @var $data NtpLaboratoryRequest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_id')); ?>:</b>
	<?php echo CHtml::encode($data->patient_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('collection_unit_name')); ?>:</b>
	<?php echo CHtml::encode($data->collection_unit_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('submission_date')); ?>:</b>
	<?php echo CHtml::encode($data->submission_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disease_classification')); ?>:</b>
	<?php echo CHtml::encode($data->disease_classification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site')); ?>:</b>
	<?php echo CHtml::encode($data->site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reason_for_examination')); ?>:</b>
	<?php echo CHtml::encode($data->reason_for_examination); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tb_case_no')); ?>:</b>
	<?php echo CHtml::encode($data->tb_case_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_received')); ?>:</b>
	<?php echo CHtml::encode($data->date_received); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lab_serial_no')); ?>:</b>
	<?php echo CHtml::encode($data->lab_serial_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examination_date')); ?>:</b>
	<?php echo CHtml::encode($data->examination_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examined_by')); ?>:</b>
	<?php echo CHtml::encode($data->examined_by); ?>
	<br />

	*/ ?>

</div>