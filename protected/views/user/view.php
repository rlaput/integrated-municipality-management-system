<script language="javascript">
    document.getElementById('menu_user').className = 'active';
</script>

<?php
$this->breadcrumbs = array(
    'Users' => array('index'),
    'View User'
);
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">User</h3>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'username',
                'family_name',
                'first_name',
                'middle_name',
                'position',
                'birthdate',
                'account_type',
            ),
        ));
        ?>
    </div>
</div>
