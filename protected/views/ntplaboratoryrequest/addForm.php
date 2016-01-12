<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'lt-dialog',
    'options' => array(
        'title' => 'New Laboratory Test Data',
        'modal' => true,
        'width' => 400,
        'height' => 450,
        'show' => 'slide',
        'hide' => 'slide',
        'draggable' => false,
        'resizable' => false,
        'autoOpen' => true,
        'close' => "js:function(e,ui){
                jQuery('body').undelegate('#closeLtDialog', 'click');
                jQuery('#lt-dialog').empty();
                 }",
    ),
));
echo $this->renderPartial('_laboratory_test_form', array('model' => $model, 'ntp_laboratory_request_id' => $ntp_laboratory_request_id));
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>
