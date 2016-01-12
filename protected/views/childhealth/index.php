<script language="javascript">
    document.getElementById('menu_health').className = 'active';
    document.getElementById('record_CHR').className = 'active';
</script>
<?php
/* @var $this ChildhealthController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Health',
    'Child Health Records',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#child-health-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Child Health Records</h1>


<div class="row">
    <div class="panel-group col-lg-6" id="accordion">
        <div class="panel panel-primary">
            <div class="panel-heading" style="cursor:pointer">
                <h4 class="panel-title">
                    <div data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                        <div class="row">
                            <div class="col-xs-11">
                                Search
                            </div>
                            <div class="col-xs-1">
                                <a style="text-align:right;text-decoration: none">
                                    <span class="icon-chevron-down icon-white"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="search-form">
                        <?php
                        $this->renderPartial('_search', array(
                            'model' => $model,
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'child-health-grid',
    'dataProvider' => $model->search(),
    'columns' => array(
        array(
            'name' => 'patient_family_name',
            'header' => 'Patient',
            'value' => '$data->patient->getName()',
        ),
        'ufc_no',
        'place_of_delivery',
        'mothers_name',
        'fathers_name',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}{delete}'
        ),
    ),
));
?>
