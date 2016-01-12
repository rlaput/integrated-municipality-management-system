<?php

$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'details-dialog',
    'options' => array(
        'title' => 'New Family Planning Details Data',
        'modal' => true,
        'width' => 450,
        'height' => 500,
        'show' => 'slide',
        'hide' => 'slide',
        'draggable' => false,
        'resizable' => false,
        'autoOpen' => true,
        'close' => "js:function(e,ui){
                jQuery('body').undelegate('#closeDetailsDialog', 'click');
                jQuery('#details-dialog').empty();
                 }",
    ),
));
echo $this->renderPartial('_details_form', array('model' => $model, 'family_planning_service_id' => $family_planning_service_id));
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>
