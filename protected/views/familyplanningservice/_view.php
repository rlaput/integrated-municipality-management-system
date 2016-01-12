<?php
/* @var $this FamilyplanningserviceController */
/* @var $data FamilyPlanningService */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_id')); ?>:</b>
	<?php echo CHtml::encode($data->patient_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_more_children')); ?>:</b>
	<?php echo CHtml::encode($data->plan_more_children); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reason_for_practicing_fp')); ?>:</b>
	<?php echo CHtml::encode($data->reason_for_practicing_fp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_acceptor')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_acceptor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_method_used')); ?>:</b>
	<?php echo CHtml::encode($data->previous_method_used); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_name')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_highest_education')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_highest_education); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spouse_occupation')); ?>:</b>
	<?php echo CHtml::encode($data->spouse_occupation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('average_monthly_income')); ?>:</b>
	<?php echo CHtml::encode($data->average_monthly_income); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('method_accepted')); ?>:</b>
	<?php echo CHtml::encode($data->method_accepted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chosen_method')); ?>:</b>
	<?php echo CHtml::encode($data->chosen_method); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fps_date')); ?>:</b>
	<?php echo CHtml::encode($data->fps_date); ?>
	<br />

	*/ ?>

</div>