<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/css/images/favicon.ico">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap-theme.min.css">

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
</head>
<body>
<div id="page" class="container">
    <div class="row">
        <div id="header">
            <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
        </div>
        <!--// header -->
        <?php echo $content; ?>
        
        <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> by <a href="http://www.ubertheme.com/" target="_blank">UberTheme</a>.<br/>
            All Rights Reserved.<br/>
            <?php echo Yii::powered(); ?>
            <div id="report-bugs"><a target="_blank" href="https://github.com/ubertheme/module-ubdatamigration/issues" title="<?php echo Yii::t('frontend', 'Report Bugs')?>"><?php echo Yii::t('frontend', 'Report Bugs')?></a></div>
        </div><!-- footer -->
    </div>
</div><!-- page -->
<!-- markup for mask box-->
<div id="processor-box" class="modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog loading-box">
        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/loading.gif"/>
                    <?php echo Yii::t('frontend', 'Data processing. Please wait…'); ?>
                    <i>(<?php echo Yii::t('frontend', 'If your data up to 2000+ records, this task can take some hours to finished.'); ?>)</i>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// markup for mask box-->

</body>
</html>