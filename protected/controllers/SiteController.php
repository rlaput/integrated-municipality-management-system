<?php

class SiteController extends Controller {

    public function actionIndex() {
        $this->pageTitle = "Integrated Municipality Management System";

        LoginForm::checkLogin();
        $this->render('index');
    }

    public function actionError() {
        $this->pageTitle = "Error";

        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    public function actionLogin() {
        $this->pageTitle = "Login";

        $this->layout = 'login';
        $model = new LoginForm;
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate())
                $model->login();
        }
        $this->render('login', array('model' => $model));
    }

    public function actionLogout() {
        LoginForm::checkLogin();
        LoginForm::logout();
        $this->redirect('login');
    }

}
