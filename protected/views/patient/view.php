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
    'View Patient'
);
if (!ChildHealth::model()->findByAttributes(array('patient_id' => $model->id))) {
    echo CHtml::button("Create Child Health Record", array('submit' => array('childhealth/create', 'id' => $model->id), 'class' => 'btn btn-sm btn-primary'));
    echo "<br/>";
    echo "<br/>";
}
if (!FamilyPlanningService::model()->findByAttributes(array('patient_id' => $model->id))) {
    echo CHtml::button("Create Family Planning Service Record", array('submit' => array('familyplanningservice/create', 'id' => $model->id), 'class' => 'btn btn-sm btn-primary'));
    echo "<br/>";
    echo "<br/>";
}
echo CHtml::button("Create Maternal Health Record", array('submit' => array('maternalhealth/create', 'id' => $model->id), 'class' => 'btn btn-sm btn-primary'));
echo "<br/>";
echo "<br/>";
echo CHtml::button("Create NTP Laboratory Request", array('submit' => array('ntplaboratoryrequest/create', 'id' => $model->id), 'class' => 'btn btn-sm btn-primary'));
echo "<br/>";
echo "<br/>";
echo CHtml::button("Create NTP Treatment Card", array('submit' => array('ntptreatmentcard/create', 'id' => $model->id), 'class' => 'btn btn-sm btn-primary'));
echo "<br/>";
echo "<br/>";
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Patient</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'patient_family_name',
                'patient_first_name',
                'patient_middle_name',
                'address',
                'contact_no',
                'gender',
                'height',
                'weight',
                'occupation',
                'family_no',
                'marital_status',
                'patient_birthdate',
                array('name' => 'user.username',
                    'label' => 'Registered By'),
                'date_registered',
            ),
        ));
        ?>
    </div>
</div>
