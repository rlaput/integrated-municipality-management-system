<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel {

    public $username;
    public $password;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules() {
        return array(
            // username and password are required
            array('username, password', 'required'),
        );
    }

    public function login() {
        if (!$this->hasErrors()) {
            $user = User::model()->findByAttributes(array('username' => $this->username, 'password' => LoginForm::encrypt($this->password)));
            if (!$user) {
                $this->addError('password', 'Incorrect username or password.');
            } else {
                Yii::app()->session['login-user'] = $user;
                Yii::app()->getController()->redirect(array("site/index"));
            }
        }
    }

    public static function encrypt($password) {
        return md5(hash('sha256', md5($password)));
    }

    public static function getUser() {
        if (isset(Yii::app()->session['login-user']))
            return User::model()->findByPk(Yii::app()->session['login-user']->id);
        return Yii::app()->session['login-user'];
    }

    public static function checkLogin() {
        if (!isset(Yii::app()->session['login-user'])) {
            Yii::app()->getController()->redirect(array("site/login"));
        }
    }

    public static function checkAdmin() {
        LoginForm::checkLogin();
        if (!(LoginForm::getUser()->isAdmin())) {
            Yii::app()->getController()->redirect(array("site/index"));
        }
    }

    public static function checkAdminOrSelf($id) {
        LoginForm::checkLogin();
        if (!(LoginForm::getUser()->isAdmin() || LoginForm::getUser()->id == $id)) {
            Yii::app()->getController()->redirect(array("site/index"));
        }
    }

    public static function logout() {
        Yii::app()->session->destroy();
    }

}
