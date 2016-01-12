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
    'View NTP Treatment Card',
);
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">NTP Treatment Card</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'tb_case_no',
                'date_opened',
                'dots_facility_name',
                array(
                    'name' => "Patient's Name",
                    'value' => $model->patient->getName()
                ),
                array(
                    'name' => "Occupation",
                    'value' => $model->patient->occupation
                ),
                array(
                    'name' => "Gender",
                    'value' => $model->patient->gender
                ),
                array(
                    'name' => "Contact No.",
                    'value' => $model->patient->contact_no
                ),
                array(
                    'name' => "Address",
                    'value' => $model->patient->address
                ),
                'bcg_scar',
                'contact_person',
                'contact_person_no',
                'source_of_patient',
                'name_of_reffering_physician',
                'history_of_anti_tb_drug_intake',
                'duration',
                'specify_drugs',
                'when',
                'where',
                'smear_status',
                'no_of_household_contacts',
                'classification_of_tb',
                'tb_site',
                'type_of_patient',
                'category_1',
                'category_2',
                'category_3',
                'name_of_treatment_partner',
                'designation_of_treatment_partner',
            ),
        ));
        ?>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Treatment Outcome</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'treatment_started',
            ),
        ));
        ?>
        <br />
        <div class="row">
            <div class="col-lg-12">
                <?php
                echo CHtml::ajaxLink('Add TO Data', Yii::app()->createUrl('ntptreatmentcard/addto') . "?id=" . $model->id, array(
                    'onclick' => '$("#to-dialog").dialog("open"); return false;',
                    'update' => '#to-dialog'
                        ), array('id' => 'showToDialog', 'class' => 'btn btn-sm btn-primary'));
                ?>
                <div id="to-dialog"></div>
            </div>
        </div>
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'to-grid',
            'dataProvider' => $model_to->search(),
            'columns' => array(
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'treatment_outcome_type',
                    'editable' => array(
                        'url' => $this->createUrl('ntptreatmentcard/update_to/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('to-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'treatment_outcome_date',
                    'value' => 'date("M d, Y", strtotime("$data->treatment_outcome_date"))',
                    'editable' => array(
                        'url' => $this->createUrl('ntptreatmentcard/update_to/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('to-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'specify',
                    'editable' => array(
                        'url' => $this->createUrl('ntptreatmentcard/update_to/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('to-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{delete}',
                    'buttons' => array(
                        'delete' => array(
                            'url' => 'Yii::app()->createUrl("ntptreatmentcard/deleteto",array("id"=>$data->id))',
                        ),
                    ),
                    'htmlOptions' => array('width' => '10%'),
                )
            ),
        ));

        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'tbdc_findings_and_recommendations',
            ),
        ));
        ?>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Sputum Examination Results/Weight Record</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <?php
                echo CHtml::ajaxLink('Add SER Data', Yii::app()->createUrl('ntptreatmentcard/addser') . "?id=" . $model->id, array(
                    'onclick' => '$("#ser-dialog").dialog("open"); return false;',
                    'update' => '#ser-dialog'
                        ), array('id' => 'showSerDialog', 'class' => 'btn btn-sm btn-primary'));
                ?>
                <div id="ser-dialog"></div>
            </div>
        </div>
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'ser-grid',
            'dataProvider' => $model_ser->search(),
            'columns' => array(
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'month',
                    'editable' => array(
                        'url' => $this->createUrl('ntptreatmentcard/update_ser/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('ser-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'due_date',
                    'value' => 'date("M d, Y", strtotime("$data->due_date"))',
                    'editable' => array(
                        'url' => $this->createUrl('ntptreatmentcard/update_ser/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('ser-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'date_examined',
                    'value' => 'date("M d, Y", strtotime("$data->date_examined"))',
                    'editable' => array(
                        'url' => $this->createUrl('ntptreatmentcard/update_ser/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('ser-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'result',
                    'editable' => array(
                        'url' => $this->createUrl('ntptreatmentcard/update_ser/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('ser-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'sputum_weight',
                    'editable' => array(
                        'url' => $this->createUrl('ntptreatmentcard/update_ser/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('ser-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{delete}',
                    'buttons' => array(
                        'delete' => array(
                            'url' => 'Yii::app()->createUrl("ntptreatmentcard/deleteser",array("id"=>$data->id))',
                        ),
                    ),
                    'htmlOptions' => array('width' => '10%'),
                )
            ),
        ));

        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'chest_xray',
            ),
        ));
        ?>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Drug Intake</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <?php
                echo CHtml::ajaxLink('Add DI Data', Yii::app()->createUrl('ntptreatmentcard/adddi') . "?id=" . $model->id, array(
                    'onclick' => '$("#di-dialog").dialog("open"); return false;',
                    'update' => '#di-dialog'
                        ), array('id' => 'showDiDialog', 'class' => 'btn btn-sm btn-primary'));
                ?>
                <div id="di-dialog"></div>
            </div>
        </div>
        <div style="overflow:scroll;">
            <?php
            $this->widget('zii.widgets.grid.CGridView', array(
                'id' => 'grr-grid',
                'dataProvider' => $model_di->search(),
                'columns' => array(
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'drug_intake_month',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd1',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd2',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd3',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd4',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd5',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd6',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd7',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd8',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd9',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd10',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd11',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd12',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd13',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd14',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd15',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd16',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd17',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd18',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd19',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd20',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd21',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd22',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd23',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd24',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd25',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd26',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd27',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd28',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd29',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd30',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'd31',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'dosers_given',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'editable.EditableColumn',
                        'name' => 'cumulative_doses_given',
                        'editable' => array(
                            'url' => $this->createUrl('ntptreatmentcard/update_di/'),
                            'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('di-grid');
                             }",
                        ),
                    ),
                    array(
                        'class' => 'CButtonColumn',
                        'template' => '{delete}',
                        'buttons' => array(
                            'delete' => array(
                                'url' => 'Yii::app()->createUrl("ntptreatmentcard/deletedi",array("id"=>$data->id))',
                            ),
                        ),
                        'htmlOptions' => array('width' => '10%'),
                    )
                ),
            ));
            ?>
        </div>
    </div>
</div>
