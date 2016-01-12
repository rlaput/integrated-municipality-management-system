<script language="javascript">
    document.getElementById('menu_user').className = 'active';
</script>

<?php
if (LoginForm::getUser()->isAdmin()) {
    $this->breadcrumbs = array(
        'Users' => array('index'),
        'Update',
    );
} else {
    $this->breadcrumbs = array(
        'Update',
    );
}
?>

<?php $this->renderPartial('_form', array('model' => $model, 'title' => "Update User")); ?>