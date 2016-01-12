<?php

if ($type === 'to') {
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'to-dialog',
        'options' => array(
            'title' => 'New TO Data',
            'modal' => true,
            'width' => 400,
            'height' => 450,
            'show' => 'slide',
            'hide' => 'slide',
            'draggable' => false,
            'resizable' => false,
            'autoOpen' => true,
            'close' => "js:function(e,ui){
                jQuery('body').undelegate('#closeToDialog', 'click');
                jQuery('#to-dialog').empty();
                 }",
        ),
    ));
    echo $this->renderPartial('_treatment_outcome_form', array('model' => $model, 'ntp_treatment_card_id' => $ntp_treatment_card_id));
    $this->endWidget('zii.widgets.jui.CJuiDialog');
} else if ($type === 'ser') {
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'ser-dialog',
        'options' => array(
            'title' => 'New SER Data',
            'modal' => true,
            'width' => 400,
            'height' => 450,
            'show' => 'slide',
            'hide' => 'slide',
            'draggable' => false,
            'resizable' => false,
            'autoOpen' => true,
            'close' => "js:function(e,ui){
                jQuery('body').undelegate('#closeSerDialog', 'click');
                jQuery('#ser-dialog').empty();
                 }",
        ),
    ));
    echo $this->renderPartial('_ser_form', array('model' => $model, 'ntp_treatment_card_id' => $ntp_treatment_card_id));
    $this->endWidget('zii.widgets.jui.CJuiDialog');
} else {
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id' => 'di-dialog',
        'options' => array(
            'title' => 'New Drug Intake Data',
            'modal' => true,
            'width' => 400,
            'height' => 450,
            'show' => 'slide',
            'hide' => 'slide',
            'draggable' => false,
            'resizable' => false,
            'autoOpen' => true,
            'close' => "js:function(e,ui){
                jQuery('body').undelegate('#closeDiDialog', 'click');
                jQuery('#di-dialog').empty();
                 }",
        ),
    ));
    echo $this->renderPartial('_drug_intake_form', array('model' => $model, 'ntp_treatment_card_id' => $ntp_treatment_card_id));
    $this->endWidget('zii.widgets.jui.CJuiDialog');
}
?>
