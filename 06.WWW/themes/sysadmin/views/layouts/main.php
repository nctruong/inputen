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
        <div id="left">
            <h1><a href="/"><b>MENUS</b></a></h1>
            <ul>
                <li class="active"><a href="dashboard.html">Dashboard</a></li>
                <li><a href="form-elements.html">Form Elements</a></li>
                <li><a href="table-options.html">Table Options</a></li>
                <li><a href="chart-options.html">Chart options</a></li>
                <li><a href="typography.html">Typography</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="file-browser.html">File browser</a></li>
                <li class="active">
                    <a href="#">Menu with submenu</a>
                    <ul>
                        <li><a href="#">The first item</a></li>
                        <li><a href="#">The second item</a></li>
                        <li class="active">
                            <a href="#">The third item</a>
                            <ul>
                                <li><a href="#">The first item</a></li>
                                <li class="active"><a href="#">The second item</a></li>
                                <li><a href="#">And a third one</a></li>
                            </ul>
                        </li>
                        <li><a href="#">The fourth item</a></li>
                        <li><a href="#">The fifth item</a></li>
                    </ul>
                </li>
                <li><a href="more-options.html">More options</a></li>
                <li><a href="boxgrid.html">Box grid</a></li>
                <li><a href="icons.html">Free icons</a></li>
            </ul>

            <!--            <div id="credits">&#169; Copyright 2012 Godzilla</div>-->
        </div>
        <div id="right">

            <div id="top-bar">
                <ul>
                    <li>Welcome, <?php echo Yii::app()->user->info->fullname; ?></li>
                    <li><a href="#"><img src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/gfx/icon-profile.png" alt="Profile" /> Profile</a></li>
                    <li>
                        <a href="#"><img src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/gfx/icon-message.png" alt="Messages" /> Messages <span>3</span></a>
                        <ul>
                            <li>
                                <a href="#">
                                    <h4>New user!</h4>
                                    Donec molestie aliquam ipsum, ac ornare sem imperdiet sit amet.
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>Administrator message</h4>
                                    Etiam lorem eros, accumsan id volutpat ut, interdum quis diam.
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4>Welcome to Godzilla</h4>
                                    Sed non velit a tortor faucibus dictum.
                                    Sed scelerisque vehicula felis.
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><img src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/gfx/icon-settings.png" alt="Settings" /> Settings</a></li>
                    <li><a href="/sysadmin/logout.html"><img src="<?php echo Yii::app()->theme->getBaseUrl(); ?>/gfx/icon-logout.png" alt="Logout" /> Logout</a></li>
                </ul>
            </div>

            <div id="breadcrumbs">
                <ul>
                    <li><a href="#">Login</a></li>
                    <li class="active"><a href="#">Dashboard</a></li>
                </ul>
                <div id="search">
                    <input type="text" value="" placeholder="Search" />
                    <button type="submit"></button>
                </div>
            </div>

            <div id="main">
                <?php echo $content; ?>
            </div>
        </div>
    </body>

</html> 