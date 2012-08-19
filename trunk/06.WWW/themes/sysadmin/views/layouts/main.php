<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="administrator" />
        <meta name="author" content="HMinh.IT" />
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/ico/favicon.ico"/>
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/ico/apple-touch-icon-144-precomposed.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/ico/apple-touch-icon-114-precomposed.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/ico/apple-touch-icon-72-precomposed.png"/>
        <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->getBaseUrl(); ?>/assets/ico/apple-touch-icon-57-precomposed.png"/>
    </head>
    <body>
        <div class="subnav">
            <ul class="nav nav-pills">
                <li class="dropdown active">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Buttons <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="#buttonGroups">Button groups</a></li>
                        <li class=""><a href="#buttonDropdowns">Button dropdowns</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Navigation <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class=""><a href="#navs">Nav, tabs, pills</a></li>
                        <li class=""><a href="#navbar">Navbar</a></li>
                        <li class=""><a href="#breadcrumbs">Breadcrumbs</a></li>
                        <li class=""><a href="#pagination">Pagination</a></li>
                    </ul>
                </li>
                <li class=""><a href="#labels">Labels</a></li>
                <li class=""><a href="#badges">Badges</a></li>
                <li class=""><a href="#typography">Typography</a></li>
                <li class=""><a href="#thumbnails">Thumbnails</a></li>
                <li class=""><a href="#alerts">Alerts</a></li>
                <li class=""><a href="#progress">Progress bars</a></li>
                <li class=""><a href="#misc">Miscellaneous</a></li>
            </ul>
        </div>
        <div class="container-fluid">
            <?php echo $content; ?>
        </div> <!-- /container -->
    </body>
</html>
