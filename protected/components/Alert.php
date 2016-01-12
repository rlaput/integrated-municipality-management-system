<?php

class Alert {

    public static function alertMessage($type, $message) {
        if ($type && $message) {
            $data['type'] = $type;
            $data['message'] = $message;
            Yii::app()->session['alertMessage'] = $data;
        }
    }

}
