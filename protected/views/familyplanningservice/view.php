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
    'View Family Planning Service Record',
);
?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Family Planning Service Record</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                array(
                    'name' => "Patient's Name",
                    'value' => $model->patient->getName()
                ),
                'plan_more_children',
                'reason_for_practicing_fp',
                'type_of_acceptor',
                'previous_method_used',
                'spouse_name',
                array(
                    'name' => 'spouse_date_of_birth',
                    'value' => date("F d, Y", strtotime('$data->spouse_date_of_birth'))
                ),
                'spouse_highest_education',
                'spouse_occupation',
                'average_monthly_income',
                'method_accepted',
                'chosen_method',
                array(
                    'name' => 'fps_date',
                    'value' => date("F d, Y", strtotime('$data->fps_date'))
                ),
            ),
        ));
        ?>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Medical History</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model->medicalHistory,
            'attributes' => array(
                'heent',
                'chest_heart',
                'abdomen',
                'genital',
                'extremities',
                'skin',
                'other_history'
            ),
        ));
        ?>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Obstetrical History</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model->obstetricalHistory,
            'attributes' => array(
                'no_of_pregnancies',
                'no_of_full_term',
                'no_of_premature',
                'no_of_abortions',
                'no_of_living_children',
                array(
                    'name' => 'last_delivery_date',
                    'value' => date("F d, Y", strtotime('$data->last_delivery_date'))
                ),
                'last_delivery_type',
                'past_menstrual_period',
                'last_menstrual_period',
                'duration_character_of_menstrual_bleeding',
                'other_history',
            ),
        ));
        ?>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Physical Examination</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model->physicalExamination,
            'attributes' => array(
                'blood_pressure',
                'physical_examination_weight',
                'pulse_rate',
                'conjunctiva',
                'neck',
                'breast',
                'thorax',
                'abdomen',
                'extremities',
                'others',
            ),
        ));
        ?>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Pelvic Examination</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model->pelvicExamination,
            'attributes' => array(
                'perenium',
                'vagina',
                'cervix',
                'cervix_color',
                'cervix_consistency',
                'uterus_position',
                'uterus_size',
                'uterus_mass',
                'uterine_depth',
                'uterus_adnexa',
            ),
        ));
        ?>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-12">
        <?php
        echo CHtml::ajaxLink('Add Details', Yii::app()->createUrl('familyplanningservice/adddetails') . "?id=" . $model->id, array(
            'onclick' => '$("#details-dialog").dialog("open"); return false;',
            'update' => '#details-dialog'
                ), array('id' => 'showDetailsDialog', 'class' => 'btn btn-sm btn-primary'));
        ?>
        <div id="details-dialog"></div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'family-details-grid',
            'dataProvider' => $family_planning_service_details_model->search(),
            'columns' => array(
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'date_service_given',
                    'value' => 'date("M d, Y", strtotime("$data->date_service_given"))',
                    'editable' => array(
                        'url' => $this->createUrl('familyplanningservice/update_fps/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('family-details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'method_to_be_used',
                    'editable' => array(
                        'url' => $this->createUrl('familyplanningservice/update_fps/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('family-details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'remarks',
                    'editable' => array(
                        'url' => $this->createUrl('familyplanningservice/update_fps/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('family-details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'name_of_provider',
                    'editable' => array(
                        'url' => $this->createUrl('familyplanningservice/update_fps/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('family-details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'next_service_date',
                    'value' => 'date("M d, Y", strtotime("$data->next_service_date"))',
                    'editable' => array(
                        'url' => $this->createUrl('familyplanningservice/update_fps/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('family-details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{delete}',
                    'buttons' => array(
                        'delete' => array(
                            'url' => 'Yii::app()->createUrl("familyplanningservice/deletefps",array("id"=>$data->id))',
                        ),
                    ),
                    'htmlOptions' => array('width' => '10%'),
                )
            ),
        ));
        ?>
    </div>
</div>