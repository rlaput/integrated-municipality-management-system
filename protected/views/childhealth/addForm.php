<?php

if ($type === 'ebfc') {
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'ebfc-dialog',
        'options' => array(
            'title' => 'New EBFC Data',
            'modal' => true,
            'width' => 400,
            'height' => 450,
            'show' => 'slide',
            'hide' => 'slide',
            'draggable' => false,
            'resizable' => false,
            'autoOpen' => true,
            'close' => "js:function(e,ui){
                jQuery('body').undelegate('#closeEbfcDialog', 'click');
                jQuery('#ebfc-dialog').empty();
                 }",
        ),
    ));
    echo $this->renderPartial('_exclusive_bf_check_form', array('model' => $model, 'child_health_record_id' => $child_health_record_id));
    $this->endWidget('zii.widgets.jui.CJuiDialog');
} else if ($type === 'it') {
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'it-dialog',
        'options' => array(
            'title' => 'New IT Data',
            'modal' => true,
            'width' => 400,
            'height' => 450,
            'show' => 'slide',
            'hide' => 'slide',
            'draggable' => false,
            'resizable' => false,
            'autoOpen' => true,
            'close' => "js:function(e,ui){
                jQuery('body').undelegate('#closeItDialog', 'click');
                jQuery('#it-dialog').empty();
                 }",
        ),
    ));
    echo $this->renderPartial('_immunization_type_form', array('model' => $model, 'child_health_record_id' => $child_health_record_id));
    $this->endWidget('zii.widgets.jui.CJuiDialog');
}else{
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'details-dialog',
        'options' => array(
            'title' => 'New Childhealth Details Data',
            'modal' => true,
            'width' => 400,
            'height' => 450,
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
    echo $this->renderPartial('_details_form', array('model' => $model, 'child_health_record_id' => $child_health_record_id));
    $this->endWidget('zii.widgets.jui.CJuiDialog');
}
?>
