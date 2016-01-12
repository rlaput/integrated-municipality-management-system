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
    'View Child Health Record',
);
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Child Health Record</h3>
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
                'ufc_no',
                'birth_order',
                'place_of_delivery',
                'mothers_name',
                'mothers_age',
                'mothers_occupation',
                'fathers_name',
                'fathers_age',
                'fathers_occupation',
                'feeding_type',
                array(
                    'name' => 'date_referred_for_newborn_screening',
                    'value' => date("F d, Y", strtotime('$data->date_referred_for_newborn_screening'))
                ),
                'child_protected_at_birth',
                array(
                    'name' => 'date_assessed',
                    'value' => date("F d, Y", strtotime('$data->date_assessed'))
                ),
                'anemic_children_mos_seen',
                'anemic_children_mos_given_iron',
                'birth_weight',
                'low_birth_weight_seen',
                'low_birth_weight_given_iron',
                array(
                    'name' => 'date_iron_started',
                    'value' => date("F d, Y", strtotime('$data->date_iron_started'))
                ),
                'vit_a_given',
                array(
                    'name' => 'date_iron_completed',
                    'value' => date("F d, Y", strtotime('$data->date_iron_completed'))
                ),
            ),
        ));
        ?>

    </div>
</div>
<br />
<div class="row">
    <div class="col-lg-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Exclusive BF Check</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        echo CHtml::ajaxLink('Add EBFC Data', Yii::app()->createUrl('childhealth/addexclusivebfcheck') . "?id=" . $model->id, array(
                            'onclick' => '$("#ebfc-dialog").dialog("open"); return false;',
                            'update' => '#ebfc-dialog'
                                ), array('id' => 'showEbfcDialog', 'class' => 'btn btn-sm btn-primary'));
                        ?>
                        <div id="ebfc-dialog"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        $this->widget('zii.widgets.grid.CGridView', array(
                            'id' => 'exclusive-bf-check-grid',
                            'dataProvider' => $exclusive_bf_check_model->search(),
                            'columns' => array(
                                array(
                                    'class' => 'editable.EditableColumn',
                                    'name' => 'no',
                                    'editable' => array(
                                        'url' => $this->createUrl('childhealth/update_ebfc/'),
                                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('exclusive-bf-check-grid');
                            }",
                                    ),
                                ),
                                array(
                                    'class' => 'editable.EditableColumn',
                                    'name' => 'check_date',
                                    'value' => 'date("M d, Y", strtotime("$data->check_date"))',
                                    'editable' => array(
                                        'url' => $this->createUrl('childhealth/update_ebfc/'),
                                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('exclusive-bf-check-grid');
                            }",
                                    )
                                ),
                                array(
                                    'class' => 'CButtonColumn',
                                    'template' => '{delete}',
                                    'buttons' => array(
                                        'delete' => array(
                                            'url' => 'Yii::app()->createUrl("childhealth/deletebfcheck",array("id"=>$data->id))',
                                        ),
                                    ),
                                    'htmlOptions' => array('width' => '3%'),
                                )
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Type of Immunization</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        echo CHtml::ajaxLink('Add IT Data', Yii::app()->createUrl('childhealth/addimmunizationtype') . "?id=" . $model->id, array(
                            'onclick' => '$("#it-dialog").dialog("open"); return false;',
                            'update' => '#it-dialog'
                                ), array('id' => 'showItDialog', 'class' => 'btn btn-sm btn-primary'));
                        ?>
                        <div id="it-dialog"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        $this->widget('zii.widgets.grid.CGridView', array(
                            'id' => 'immunization-type-grid',
                            'dataProvider' => $immunization_type_model->search(),
                            'columns' => array(
                                array(
                                    'class' => 'editable.EditableColumn',
                                    'name' => 'session',
                                    'editable' => array(
                                        'url' => $this->createUrl('childhealth/update_it/'),
                                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('immunization-type-grid');
                             }",
                                    ),
                                ),
                                array(
                                    'class' => 'editable.EditableColumn',
                                    'name' => 'bcg',
                                    'editable' => array(
                                        'url' => $this->createUrl('childhealth/update_it/'),
                                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('immunization-type-grid');
                             }",
                                    ),
                                ),
                                array(
                                    'class' => 'editable.EditableColumn',
                                    'name' => 'hep_bv',
                                    'editable' => array(
                                        'url' => $this->createUrl('childhealth/update_it/'),
                                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('immunization-type-grid');
                             }",
                                    ),
                                ),
                                array(
                                    'class' => 'editable.EditableColumn',
                                    'name' => 'dpt',
                                    'editable' => array(
                                        'url' => $this->createUrl('childhealth/update_it/'),
                                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('immunization-type-grid');
                             }",
                                    ),
                                ),
                                array(
                                    'class' => 'editable.EditableColumn',
                                    'name' => 'opv',
                                    'editable' => array(
                                        'url' => $this->createUrl('childhealth/update_it/'),
                                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('immunization-type-grid');
                             }",
                                    ),
                                ),
                                array(
                                    'class' => 'editable.EditableColumn',
                                    'name' => 'amv',
                                    'editable' => array(
                                        'url' => $this->createUrl('childhealth/update_it/'),
                                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('immunization-type-grid');
                             }",
                                    ),
                                ),
                                array(
                                    'class' => 'editable.EditableColumn',
                                    'name' => 'mmr',
                                    'editable' => array(
                                        'url' => $this->createUrl('childhealth/update_it/'),
                                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('immunization-type-grid');
                             }",
                                    ),
                                ),
                                array(
                                    'class' => 'editable.EditableColumn',
                                    'name' => 'pentavalent',
                                    'editable' => array(
                                        'url' => $this->createUrl('childhealth/update_it/'),
                                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('immunization-type-grid');
                             }",
                                    ),
                                ),
                                array(
                                    'class' => 'CButtonColumn',
                                    'template' => '{delete}',
                                    'buttons' => array(
                                        'delete' => array(
                                            'url' => 'Yii::app()->createUrl("childhealth/deleteit",array("id"=>$data->id))',
                                        ),
                                    ),
                                    'htmlOptions' => array('width' => '3%'),
                                )
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-12">
        <?php
        echo CHtml::ajaxLink('Add Details', Yii::app()->createUrl('childhealth/adddetails') . "?id=" . $model->id, array(
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
            'id' => 'childhealth-details-grid',
            'dataProvider' => $childhealth_details_model->search(),
            'columns' => array(
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'date',
                    'value' => 'date("M d, Y", strtotime("$data->date"))',
                    'editable' => array(
                        'url' => $this->createUrl('childhealth/update_chd/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('childhealth-details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'age',
                    'editable' => array(
                        'url' => $this->createUrl('childhealth/update_chd/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('childhealth-details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'recorded_weight',
                    'editable' => array(
                        'url' => $this->createUrl('childhealth/update_chd/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('childhealth-details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'temperature',
                    'editable' => array(
                        'url' => $this->createUrl('childhealth/update_chd/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('childhealth-details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'recorded_height',
                    'editable' => array(
                        'url' => $this->createUrl('childhealth/update_chd/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('childhealth-details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'findings',
                    'editable' => array(
                        'url' => $this->createUrl('childhealth/update_chd/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('childhealth-details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'notes',
                    'editable' => array(
                        'url' => $this->createUrl('childhealth/update_chd/'),
                        'onSave' => "js: function(e, params) {
                                $.fn.yiiGridView.update('childhealth-details-grid');
                             }",
                    ),
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{delete}',
                    'buttons' => array(
                        'delete' => array(
                            'url' => 'Yii::app()->createUrl("childhealth/deletechd",array("id"=>$data->id))',
                        ),
                    ),
                    'htmlOptions' => array('width' => '10%'),
                )
            ),
        ));
        ?>
    </div>
</div>