<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- start: Meta -->
        <meta charset="utf-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- end: Mobile Specific -->

        <?php $ver = HVersion::VERSION; ?>

        <!-- start: CSS -->
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/animate.min.css?ver=<?php echo $ver; ?>" rel="stylesheet">
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap.min.css?ver=<?php echo $ver; ?>" rel="stylesheet">
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/datepicker.css?ver=<?php echo $ver; ?>" rel="stylesheet">
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/style.css?ver=<?php echo $ver; ?>" rel="stylesheet">
        <link href="<?php echo Yii::app()->baseUrl; ?>/resources/font-awesome/css/font-awesome.min.css?ver=<?php echo $ver; ?>" rel="stylesheet">
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap-wysihtml5.css?ver=<?php echo $ver; ?>" rel="stylesheet">
        <link href="<?php echo Yii::app()->baseUrl; ?>/css/flatelements.css?ver=<?php echo $ver; ?>" rel="stylesheet">
        <!-- end: CSS -->

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="<?php echo Yii::app()->baseUrl; ?>/js/html5shiv.js"></script>
        <link id="ie-style" href="<?php echo Yii::app()->baseUrl; ?>/css/ie.css" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
        <link id="ie9style" href="<?php echo Yii::app()->baseUrl; ?>/css/ie9.css" rel="stylesheet">
        <![endif]-->

        <!-- start: JavaScript -->
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap.min.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/ekko-lightbox-modified.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/modernizr.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.cookie.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.highlight.min.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.autosize.min.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.timeago.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/locales/jquery.timeago.<?php echo Yii::app()->locale->getLanguageId(Yii::app()->language); ?>.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.knob.min.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/wysihtml5-0.3.0.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap3-wysihtml5.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.nicescroll.min.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.flatelements.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.placeholder.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.iframe-transport.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.ui.widget.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.fileupload.js?ver=<?php echo $ver; ?>"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.color-2.1.0.min.js?ver=<?php echo $ver; ?>"></script>

        <!-- start: render additional head (css and js files) -->
        <?php $this->renderPartial('//layouts/head'); ?>

        <!-- end: render additional head -->

        <!-- Global app functions -->
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/app.js?ver=<?php echo $ver; ?>"></script>
        <!-- end: JavaScript -->

        <!-- start: Favicon and Touch Icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?php echo Yii::app()->baseUrl; ?>/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114"
              href="<?php echo Yii::app()->baseUrl; ?>/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72"
              href="<?php echo Yii::app()->baseUrl; ?>/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed"
              href="<?php echo Yii::app()->baseUrl; ?>/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl; ?>/ico/favicon.ico">
        <!-- end: Favicon and Touch Icons -->



    </head>

    <body>
        <?php if (Yii::app()->user->getModel()->getSetting("enable_html5_desktop_notifications", 'core', HSetting::Get('enable_html5_desktop_notifications', 'notification'))) : ?>
            <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/desktop-notify-min.js"></script>
            <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/desktop-notify-config.js"></script>
        <?php endif; ?>

        <!-- start: first top navigation bar -->
        <div id="topbar-first" class="topbar">
            <div class="container">
                <div class="topbar-brand">
                    <?php $this->widget('application.widgets.TopLogoWidget', array()); ?>
                </div>

                <div class="topbar-actions pull-right">
                    <?php $this->widget('application.modules_core.user.widgets.AccountTopMenuWidget'); ?>
                </div>

                <div class="notifications pull-right">

                    <!-- global notifications dropdown -->
                    <?php $this->widget('application.modules_core.notification.widgets.NotificationListWidget'); ?>

                    <!-- Notification addon widget for modules -->
                    <?php $this->widget('application.widgets.NotificationAddonWidget', array('widgets' => array())); ?>

                </div>

            </div>

        </div>
        <!-- end: first top navigation bar -->


        <!-- start: second top navigation bar -->
        <div id="topbar-second" class="topbar">
            <div class="container">
                <ul class="nav ">
                    <!-- load space chooser widget -->
                    <?php $this->widget('application.modules_core.space.widgets.SpaceChooserWidget', array()); ?>

                    <!-- load navigation from widget -->
                    <?php $this->widget('application.widgets.TopMenuWidget', array()); ?>
                </ul>

                <ul class="nav pull-right" id="search-menu-nav">
                    <li class="dropdown">
                        <a href="#" id="search-menu" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-search"></i></a>
                        <ul class="dropdown-menu pull-right" id="search-menu-dropdown">
                            <?php
                            $this->widget('application.widgets.TopMenuRightStackWidget', array(
                                'widgets' => array(
                                    array('application.widgets.SearchMenuWidget', array())
                                )
                            ));
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- end: second top navigation bar -->

        <?php $this->widget('application.modules_core.tour.widgets.TourWidget', array()); ?>

        <!-- start: show content (and check, if exists a sublayout -->
        <?php if (isset($this->subLayout) && $this->subLayout != "") : ?>
            <?php echo $this->renderPartial($this->subLayout, array('content' => $content)); ?>
        <?php else: ?>
            <?php echo $content; ?>
        <?php endif; ?>
        <!-- end: show content -->


        <!-- start: Modal (every lightbox will/should use this construct to show content)-->
        <div class="modal" id="globalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="loader"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Modal -->

        <?php echo HSetting::GetText('trackingHtmlCode'); ?>
    </body>
</html>
