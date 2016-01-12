<script language="javascript">
    document.getElementById('menu_user').className = 'active';
</script>
<?php
$this->breadcrumbs = array(
    'Users' => array('index'),
    'Create',
);

$this->renderPartial('_form', array('model' => $model, 'title' => "Create User"));
?>