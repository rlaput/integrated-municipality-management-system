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
    'View NTP Laboratory Request',
);
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">NTP Laboratory Request</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'collection_unit_name',
                array(
                    'name' => "Patient's Name",
                    'value' => $model->patient->getName()
                ),
                'submission_date',
                'disease_classification',
                'site',
                'reason_for_examination',
                'tb_case_no',
                'date_received',
                'lab_serial_no',
                'examination_date',
                'examined_by',
            ),
        ));
        ?>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Laboratory Test</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <?php
                echo CHtml::ajaxLink('Add Laboratory Test Data', Yii::app()->createUrl('ntplaboratoryrequest/addlt') . "?id=" . $model->id, array(
                    'onclick' => '$("#lt-dialog").dialog("open"); return false;',
                    'update' => '#lt-dialog'
                        ), array('id' => 'showLtDialog', 'class' => 'btn btn-sm btn-primary'));
                ?>
                <div id="lt-dialog"></div>
            </div>
        </div>
        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'lt-grid',
            'dataProvider' => $model_laboratory_test->search(),
            'columns' => array(
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'collection_date',
                    'value' => 'date("M d, Y", strtotime("$data->collection_date"))',
                    'editable' => array(
                        'url' => $this->createUrl('ntplaboratoryrequest/update_lt/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('lt-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'visual_appearance',
                    'editable' => array(
                        'url' => $this->createUrl('ntplaboratoryrequest/update_lt/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('lt-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'reading',
                    'editable' => array(
                        'url' => $this->createUrl('ntplaboratoryrequest/update_lt/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('lt-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'laboratory_diagnosis',
                    'editable' => array(
                        'url' => $this->createUrl('ntplaboratoryrequest/update_lt/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('lt-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{delete}',
                    'buttons' => array(
                        'delete' => array(
                            'url' => 'Yii::app()->createUrl("ntplaboratoryrequest/deletelt",array("id"=>$data->id))',
                        ),
                    ),
                    'htmlOptions' => array('width' => '10%'),
                )
            ),
        ));
        ?>
    </div>
</div>
