<script language="javascript">
    document.getElementById('menu_health').className = 'active';
    document.getElementById('menu_health_patients').className = 'active';
</script>
<?php
/* @var $this PatientController */
/* @var $model Patient */

$this->breadcrumbs = array(
    'Health',
    'Patients',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#patient-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Patients</h1>
<?php
echo CHtml::button("Create Patient", array('submit' => Yii::app()->createUrl('patient/create'), 'class' => 'btn btn-sm btn-primary'));
?>
<br/>
<br/>

<div class="row">
    <div class="panel-group col-lg-12" id="accordion">
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
    'id' => 'patient-grid',
    'dataProvider' => $model->search(),
    'columns' => array(
        'patient_family_name',
        'patient_first_name',
        'patient_middle_name',
        'address',
        'gender',
        'occupation',
        'family_no',
        'marital_status',
        'contact_no',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}{delete}'
        ),
    ),
));
?>







