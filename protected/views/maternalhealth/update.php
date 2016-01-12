<script language="javascript">
    document.getElementById('menu_health').className = 'active';
    document.getElementById('record_MHR').className = 'active';
</script>
<?php
/* @var $this MaternalhealthController */
/* @var $model MaternalHealth */

$this->breadcrumbs = array(
    'Health',
    'Maternal Health Records' => array('index'),
    'Update Maternal Health Record',
);
?>

<?php
$this->renderPartial('_form', array(
    'model' => $model,
    'patient_model' => $patient_model,
    'title' => 'Update Maternal Health Record'
));
?>