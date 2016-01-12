<script language="javascript">
    document.getElementById('menu_user').className = 'active';
</script>

<?php
$this->breadcrumbs = array(
    'Users' => array('index'),
    'Index',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Users</h1>
<?php
echo CHtml::button("Create User", array('submit' => Yii::app()->createUrl('user/create'), 'class' => 'btn btn-primary'));
?>
<br/>
<br/>
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
$model->account_type = 'Limited';
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'user-grid',
    'dataProvider' => $model->search(),
    'columns' => array(
        'username',
        'family_name',
        'first_name',
        'middle_name',
        'position',
        array(
            'name' => 'birthdate',
            'htmlOptions' => array('style' => 'text-align:center')
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{update}{delete}'
        ),
    ),
));
?>
