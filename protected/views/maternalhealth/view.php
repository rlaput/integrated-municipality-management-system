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
    'View Maternal Health Record',
);
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Maternal Health Record</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'patient.family_no',
                array(
                    'name' => "Patient's Name",
                    'value' => $model->patient->getName()
                ),
                'patient.patient_birthdate',
                'patient.height',
                'patient.address',
                'husband_name',
                'husband_occupation',
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
            'data' => $model,
            'attributes' => array(
                'no_of_children_born_alive',
                'no_of_living_children',
                'no_of_abortion',
                'no_of_stillbirths_fetal_deaths',
                'last_delivery_type',
                'large_babies_history',
                'diabetes_history',
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
            'data' => $model,
            'attributes' => array(
                'previous_illness',
                'allergy',
                'previous_hospitalization',
            ),
        ));
        ?>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Tetanus Toxoid Status</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <?php
                echo CHtml::ajaxLink('Add TTS Data', Yii::app()->createUrl('maternalhealth/addtts') . "?id=" . $model->id, array(
                    'onclick' => '$("#tts-dialog").dialog("open"); return false;',
                    'update' => '#tts-dialog'
                        ), array('id' => 'showTtsDialog', 'class' => 'btn btn-sm btn-primary'));
                ?>
                <div id="tts-dialog"></div>
            </div>
        </div>
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'tts-grid',
            'dataProvider' => $model_tts->search(),
            'columns' => array(
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'date',
                    'value' => 'date("M d, Y", strtotime("$data->date"))',
                    'editable' => array(
                        'url' => $this->createUrl('maternalhealth/update_tts/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('tts-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'tt',
                    'editable' => array(
                        'url' => $this->createUrl('maternalhealth/update_tts/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('tts-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{delete}',
                    'buttons' => array(
                        'delete' => array(
                            'url' => 'Yii::app()->createUrl("maternalhealth/deletetts",array("id"=>$data->id))',
                        ),
                    ),
                    'htmlOptions' => array('width' => '10%'),
                )
            ),
        ));
        ?>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Laboratory Exams</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'urinalysis',
                'cbc',
                'hbs_antigen',
                'prevoius_pregnancy_complication',
            ),
        ));
        ?>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Present Pregnancy</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'gravida',
                'para',
                'a',
                'stillbirth',
                'cmp',
                'edc',
                'where_to_deliver',
                'to_be_attended_by',
                'plan_to_submit',
                'risk_codes',
                'pregnancy_terminated_date',
                'outcome',
                'birthwt',
                'attended_by',
                'checklist',
            ),
        ));
        ?>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Micronutrient Supplementation</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                array(
                    'name' => 'Vit A Date Given',
                    'value' => $model->vit_a_date_given
                ),
                array(
                    'name' => 'Vit A Prescribed',
                    'value' => $model->vit_a_prescribed
                ),
                array(
                    'name' => 'Iron Folic Date Given',
                    'value' => $model->iron_folic_date_given
                ),
                array(
                    'name' => 'Iron Folic Prescribed',
                    'value' => $model->iron_folic_prescribed
                ),
                array(
                    'name' => 'Iron Folic Months',
                    'value' => $model->iron_folic_month
                ),
                array(
                    'name' => 'Mebendazole Date Given',
                    'value' => $model->mebendazole_date_given
                ),
            ),
        ));
        ?>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <?php
                echo CHtml::ajaxLink('Add Details', Yii::app()->createUrl('maternalhealth/adddetails') . "?id=" . $model->id, array(
                    'onclick' => '$("#details-dialog").dialog("open"); return false;',
                    'update' => '#details-dialog'
                        ), array('id' => 'showDetailsDialog', 'class' => 'btn btn-sm btn-primary'));
                ?>
                <div id="details-dialog"></div>
            </div>
        </div>
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'details-grid',
            'dataProvider' => $model_details->search(),
            'columns' => array(
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'date',
                    'value' => 'date("M d, Y", strtotime("$data->date"))',
                    'editable' => array(
                        'url' => $this->createUrl('maternalhealth/update_details/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'aog',
                    'editable' => array(
                        'url' => $this->createUrl('maternalhealth/update_details/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'maternal_weight',
                    'editable' => array(
                        'url' => $this->createUrl('maternalhealth/update_details/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'bp',
                    'editable' => array(
                        'url' => $this->createUrl('maternalhealth/update_details/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'fh',
                    'editable' => array(
                        'url' => $this->createUrl('maternalhealth/update_details/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'fhb',
                    'editable' => array(
                        'url' => $this->createUrl('maternalhealth/update_details/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'presenting_part_of_fetus',
                    'editable' => array(
                        'url' => $this->createUrl('maternalhealth/update_details/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'findings',
                    'editable' => array(
                        'url' => $this->createUrl('maternalhealth/update_details/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'nurses_notes',
                    'editable' => array(
                        'url' => $this->createUrl('maternalhealth/update_details/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{delete}',
                    'buttons' => array(
                        'delete' => array(
                            'url' => 'Yii::app()->createUrl("maternalhealth/deletedetails",array("id"=>$data->id))',
                        ),
                    ),
                    'htmlOptions' => array('width' => '10%'),
                )
            ),
        ));
        ?>
    </div>
</div>