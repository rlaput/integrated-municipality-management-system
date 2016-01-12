<script language="javascript">
    document.getElementById('menu_health').className = 'active';
    document.getElementById('record_FPSR').className = 'active';
</script>
<?php
/* @var $this FamilyplanningserviceController */
/* @var $model FamilyPlanningService */

$this->breadcrumbs = array(
    'Health',
    'Family Planning Services' => array('index'),
    'Create Family Planning Service Record',
);
?>

<?php
$this->renderPartial('_form', array(
    'model' => $model,
    'patient_model' => $patient_model,
    'medical_history_model' => $medical_history_model,
    'obstetrical_history_model' => $obstetrical_history_model,
    'physical_examination_model' => $physical_examination_model,
    'pelvic_examination_model' => $pelvic_examination_model,
    'title' => 'Create Family Planning Service Record'
));
?>