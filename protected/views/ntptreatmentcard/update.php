<script language="javascript">
    document.getElementById('menu_health').className = 'active';
    document.getElementById('record_NTPTC').className = 'active';
</script>
<?php
/* @var $this NtptreatmentcardController */
/* @var $model NtpTreatmentCard */

$this->breadcrumbs = array(
    'Health',
    'NTP Treatment Cards' => array('index'),
    'Update NTP Treatment Card',
);
?>

<?php
$this->renderPartial('_form', array(
    'model' => $model,
    'patient_model' => $patient_model,
    'title' => 'Update NTP Laboratory Request'
));
?>