<?php
/* @var $this NtptreatmentcardController */
/* @var $data NtpTreatmentCard */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_id')); ?>:</b>
	<?php echo CHtml::encode($data->patient_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tb_case_no')); ?>:</b>
	<?php echo CHtml::encode($data->tb_case_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_opened')); ?>:</b>
	<?php echo CHtml::encode($data->date_opened); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dots_facility_name')); ?>:</b>
	<?php echo CHtml::encode($data->dots_facility_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bcg_scar')); ?>:</b>
	<?php echo CHtml::encode($data->bcg_scar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_person')); ?>:</b>
	<?php echo CHtml::encode($data->contact_person); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_person_no')); ?>:</b>
	<?php echo CHtml::encode($data->contact_person_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_of_patient')); ?>:</b>
	<?php echo CHtml::encode($data->source_of_patient); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_of_reffering_physician')); ?>:</b>
	<?php echo CHtml::encode($data->name_of_reffering_physician); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('history_of_anti_tb_drug_intake')); ?>:</b>
	<?php echo CHtml::encode($data->history_of_anti_tb_drug_intake); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
	<?php echo CHtml::encode($data->duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('specify_drugs')); ?>:</b>
	<?php echo CHtml::encode($data->specify_drugs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('when')); ?>:</b>
	<?php echo CHtml::encode($data->when); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('where')); ?>:</b>
	<?php echo CHtml::encode($data->where); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('smear_status')); ?>:</b>
	<?php echo CHtml::encode($data->smear_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_household_contacts')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_household_contacts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classification_of_tb')); ?>:</b>
	<?php echo CHtml::encode($data->classification_of_tb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tb_site')); ?>:</b>
	<?php echo CHtml::encode($data->tb_site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_patient')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_patient); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_1')); ?>:</b>
	<?php echo CHtml::encode($data->category_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_2')); ?>:</b>
	<?php echo CHtml::encode($data->category_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_3')); ?>:</b>
	<?php echo CHtml::encode($data->category_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('treatment_started')); ?>:</b>
	<?php echo CHtml::encode($data->treatment_started); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tbdc_findings_and_recommendations')); ?>:</b>
	<?php echo CHtml::encode($data->tbdc_findings_and_recommendations); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chest_xray')); ?>:</b>
	<?php echo CHtml::encode($data->chest_xray); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_of_treatment_partner')); ?>:</b>
	<?php echo CHtml::encode($data->name_of_treatment_partner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('designation_of_treatment_partner')); ?>:</b>
	<?php echo CHtml::encode($data->designation_of_treatment_partner); ?>
	<br />

	*/ ?>

</div>