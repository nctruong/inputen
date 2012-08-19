<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>

        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <style type="text/css">
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/style.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/style_text.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/login.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/link-buttons.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/fullcalendar.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/forms.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/form-buttons.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/accordion.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/modalwindow.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/system-messages.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/datatable.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/statics.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/tabs.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/alerts.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/tooltip.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/notifications.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/prettify.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/elfinder.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/pirebox.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/colorpicker.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/wizard.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/wysiwyg.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/wysiwyg.modal.css");
            @import url("<?php echo Yii::app()->theme->getBaseUrl(); ?>/css/wysiwyg-editor.css");
        </style>

        <!--[if lte IE 8]>
                <script type="text/javascript" src="js/excanvas.min.js"></script>
        <![endif]-->

        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery-ui-select.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery-ui-spinner.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.customInput.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.smartwizard-2.0.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.alerts.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.flot.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.graphtable-0.2.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.flot.pie.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.flot.resize.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.filestyle.mini.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/prettify.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/elfinder.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.jgrowl.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.tipsy.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/fullcalendar.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/pirobox.extended.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.metadata.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/jquery.wysiwyg.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/controls/wysiwyg.image.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/controls/wysiwyg.link.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/controls/wysiwyg.table.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/plugins/wysiwyg.rmFormat.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/js/costum.js"></script>	

    </head>

    <body onload="prettyPrint()">
        <?php echo $content; ?>
    </body>

</html> 