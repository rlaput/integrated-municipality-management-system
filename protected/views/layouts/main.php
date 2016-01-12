<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/default.css" />

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap/bootswatch.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js" type="text/javascript"></script>

        <title><?php echo isset($this->pageTitle) ? CHtml::encode(Yii::app()->name) . " - " . $this->pageTitle : CHtml::encode(Yii::app()->name); ?></title>
    </head>

    <body>


        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="../" class="navbar-brand">IMMS</a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-main">
                    <ul class="nav navbar-nav">
                        <li id="menu_home">
                            <a href="<?php echo Yii::app()->createUrl('site/index') ?>">Home</a>
                        </li>
                        <?php if (LoginForm::getUser()->isAdmin()) { ?>
                            <li id="menu_user">
                                <a href="<?php echo Yii::app()->createUrl('user/index') ?>">Manage Users</a>
                            </li>
                        <?php } ?>  
                        <li class="dropdown" id="menu_health">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="health">Health <span class="caret"></span></a>
                            <ul class="dropdown-menu" aria-labelledby="health">
                                <li id="menu_health_patients"><a href="<?php echo Yii::app()->createUrl('patient/index'); ?>">Patients</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation" class="dropdown-header">Records</li>

                                <li id="record_CHR"><a href="<?php echo Yii::app()->createUrl('childhealth/index'); ?>">Child Health Record</a></li>
                                <li id="record_FPSR"><a href="<?php echo Yii::app()->createUrl('familyplanningservice/index'); ?>">Family Planning Service Record</a></li>
                                <li id="record_MHR"><a href="<?php echo Yii::app()->createUrl('maternalhealth/index'); ?>">Maternal Health Record</a></li>
                                <li id="record_NTPLR"><a href="<?php echo Yii::app()->createUrl('ntplaboratoryrequest/index'); ?>">NTP Laboratory Request Form for Direct Sputum Smear Microscopy</a></li>
                                <li id="record_NTPTC"><a href="<?php echo Yii::app()->createUrl('ntptreatmentcard/index'); ?>">NTP Treatment Card</a></li>
                            </ul>
                        </li>


                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <p class="navbar-text" style="color: white">Signed in as <?php echo LoginForm::getUser()->username; ?></p>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="logout"><span class="icon-cog icon-white"></span> <span class="caret"></span></a>
                            <ul class="dropdown-menu" aria-labelledby="logout">
                                <li><a href="<?php echo Yii::app()->createUrl('user/update', array('id' => LoginForm::getUser()->id)); ?>">Manage Account</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('site/logout'); ?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container" id="contents">
            <?php
            if ($this->breadcrumbs) {
                echo '<div class="well breadcrumbs non-printable">';
                $this->widget('zii.widgets.CBreadcrumbs', array('links' => $this->breadcrumbs,));
                echo "</div>";
            }
            ?>
            <div id="alertMsg">
                <?php
                if (isset(Yii::app()->session['alertMessage'])) {
                    ?>
                    <div class="alert alert-dismissable alert-<?php echo Yii::app()->session['alertMessage']['type']; ?>">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <?php echo Yii::app()->session['alertMessage']['message']; ?>
                    </div>
                    <?php
                    unset(Yii::app()->session['alertMessage']);
                }
                ?>
            </div>
            <?php echo $content; ?>
        </div>

        <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
            All Rights Reserved.<br/>
            <?php echo Yii::powered(); ?>
        </div><!-- footer -->


    </body>
</html>
