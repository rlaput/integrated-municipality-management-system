<?php
/* @var $this MaternalhealthController */
/* @var $data MaternalHealth */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_id')); ?>:</b>
	<?php echo CHtml::encode($data->patient_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_of_husband')); ?>:</b>
	<?php echo CHtml::encode($data->name_of_husband); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_children_born_alive')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_children_born_alive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_living_children')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_living_children); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_abortion')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_abortion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_stillbirths_fetal_deaths')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_stillbirths_fetal_deaths); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('last_delivery_type')); ?>:</b>
	<?php echo CHtml::encode($data->last_delivery_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('large_babies_history')); ?>:</b>
	<?php echo CHtml::encode($data->large_babies_history); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diabetes_history')); ?>:</b>
	<?php echo CHtml::encode($data->diabetes_history); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_illness')); ?>:</b>
	<?php echo CHtml::encode($data->previous_illness); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allergy')); ?>:</b>
	<?php echo CHtml::encode($data->allergy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_hospitalization')); ?>:</b>
	<?php echo CHtml::encode($data->previous_hospitalization); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('urinalysis')); ?>:</b>
	<?php echo CHtml::encode($data->urinalysis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cbc')); ?>:</b>
	<?php echo CHtml::encode($data->cbc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hbs_antigen')); ?>:</b>
	<?php echo CHtml::encode($data->hbs_antigen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prevoius_pregnancy_complication')); ?>:</b>
	<?php echo CHtml::encode($data->prevoius_pregnancy_complication); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gravida')); ?>:</b>
	<?php echo CHtml::encode($data->gravida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('para')); ?>:</b>
	<?php echo CHtml::encode($data->para); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('a')); ?>:</b>
	<?php echo CHtml::encode($data->a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stillbirth')); ?>:</b>
	<?php echo CHtml::encode($data->stillbirth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cmp')); ?>:</b>
	<?php echo CHtml::encode($data->cmp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edc')); ?>:</b>
	<?php echo CHtml::encode($data->edc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('where_to_deliver')); ?>:</b>
	<?php echo CHtml::encode($data->where_to_deliver); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_be_attended_by')); ?>:</b>
	<?php echo CHtml::encode($data->to_be_attended_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('plan_to_submit')); ?>:</b>
	<?php echo CHtml::encode($data->plan_to_submit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('risk_codes')); ?>:</b>
	<?php echo CHtml::encode($data->risk_codes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregnancy_terminated_date')); ?>:</b>
	<?php echo CHtml::encode($data->pregnancy_terminated_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outcome')); ?>:</b>
	<?php echo CHtml::encode($data->outcome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birthwt')); ?>:</b>
	<?php echo CHtml::encode($data->birthwt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attended_by')); ?>:</b>
	<?php echo CHtml::encode($data->attended_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('checklist')); ?>:</b>
	<?php echo CHtml::encode($data->checklist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vit_a_date_given')); ?>:</b>
	<?php echo CHtml::encode($data->vit_a_date_given); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vit_a_prescribed')); ?>:</b>
	<?php echo CHtml::encode($data->vit_a_prescribed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iron_folic_date_given')); ?>:</b>
	<?php echo CHtml::encode($data->iron_folic_date_given); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iron_folic_prescribed')); ?>:</b>
	<?php echo CHtml::encode($data->iron_folic_prescribed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iron_folic_month')); ?>:</b>
	<?php echo CHtml::encode($data->iron_folic_month); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mebendazole_date_given')); ?>:</b>
	<?php echo CHtml::encode($data->mebendazole_date_given); ?>
	<br />

	*/ ?>

</div>