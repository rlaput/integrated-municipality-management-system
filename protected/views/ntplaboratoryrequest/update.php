<script language="javascript">
    document.getElementById('menu_health').className = 'active';
    document.getElementById('record_NTPLR').className = 'active';
</script>
<?php
/* @var $this NtplaboratoryrequestController */
/* @var $model NtpLaboratoryRequest */

$this->breadcrumbs = array(
    'Health',
    'NTP Laboratory Requests' => array('index'),
    'Update NTP Laboratory Request',
);
?>

<?php
$this->renderPartial('_form', array(
    'model' => $model,
    'patient_model' => $patient_model,
    'title' => 'Update NTP Laboratory Request'
));
?>