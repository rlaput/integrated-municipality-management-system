<?php

if ($type === 'tts') {
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'tts-dialog',
        'options' => array(
            'title' => 'New TTS Data',
            'modal' => true,
            'width' => 400,
            'height' => 450,
            'show' => 'slide',
            'hide' => 'slide',
            'draggable' => false,
            'resizable' => false,
            'autoOpen' => true,
            'close' => "js:function(e,ui){
                jQuery('body').undelegate('#closeTtsDialog', 'click');
                jQuery('#tts-dialog').empty();
                 }",
        ),
    ));
    echo $this->renderPartial('_tetanus_toxoid_status_form', array('model' => $model, 'maternal_health_record_id' => $maternal_health_record_id));
    $this->endWidget('zii.widgets.jui.CJuiDialog');
} else {
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'details-dialog',
        'options' => array(
            'title' => 'New MHR Details Data',
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
    echo $this->renderPartial('_details_form', array('model' => $model, 'maternal_health_record_id' => $maternal_health_record_id));
    $this->endWidget('zii.widgets.jui.CJuiDialog');
}
?>
