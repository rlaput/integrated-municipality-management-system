<script language="javascript">
    document.getElementById('menu_health').className = 'active';
    document.getElementById('menu_health_patients').className = 'active';
</script>
<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs = array(
    'Health',
    'Patients' => array('index'),
    'Update Patient',
);
?>


<?php $this->renderPartial('_form', array('model' => $model, 'title' => "Update Patient")); ?>