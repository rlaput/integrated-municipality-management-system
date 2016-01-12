<script language="javascript">
    document.getElementById('menu_health').className = 'active';
    document.getElementById('record_CHR').className = 'active';
</script>
<?php
/* @var $this ChildhealthController */
/* @var $model ChildHealth */

$this->breadcrumbs = array(
    'Health',
    'Child Health Records' => array('index'),
    'Update Child Health Record',
);
?>

<?php
$this->renderPartial('_form', array(
    'model' => $model,
    'patient_model' => $patient_model,
    'title' => 'Update Child Health Record'
));
?>