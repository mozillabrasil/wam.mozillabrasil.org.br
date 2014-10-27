<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8"/>
        <title>WAM</title>
        <meta name="viewport" content="width=device-width, minimal-ui, initial-scale=1.0, user-scalable=0"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <!-- ICONS -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/icon/icon-16.png"/>
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/icon/icon-16.png">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url(); ?>assets/images/icon/icon-57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/images/icon/icon-72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/images/icon/icon-76.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/images/icon/icon-114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/images/icon/icon-120.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/images/icon/icon-144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/images/icon/icon-152.png">
        <link rel="apple-touch-startup-image" href="<?php echo base_url(); ?>assets/images/icon/icon-152.png">
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css"/>
        <!-- main css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css"/>
        <!-- mobile css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css"/>
        <!-- FontAwesome Support -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
        <!-- FontAwesome Support -->
        <!-- Btns -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/btn.css" />
        <!-- Btns -->
        <!-- Superfish menu -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/superfish.css" />
        <!-- Superfish menu -->
        <!-- Owl Carousel -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" />
        <!-- Owl Carousel -->
        <!-- Twitter feed -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/twitterfeed.css" />
        <!-- Twitter feed -->
        <!-- Typicons -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/typicons.min.css" />
        <!-- Typicons -->
        <!-- WOW animations -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css" />
        <!-- WOW animations -->
        <!-- Forms -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/forms.css" />
        <!-- Forms -->
        <!-- Flickr feed -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/flickrfeed.css" />
        <!-- Flickr feed -->
        <!-- Pulse Slider -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pm-slider.css" />
        <!-- Pulse Slider -->
        <link rel="prefetch" type="application/l10n" href="<?php echo base_url(); ?>assets/data/locales.ini" />
        <!-- Development Google Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Cantata+One%7COpen+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
        <!-- Development Google Fonts -->
        <style type="text/css">
            body.blur main{
                -webkit-filter: blur(2px); 
                filter: url(#blur-effect-1); 
                -webkit-transition: all 0.3s ease-out; 
                -moz-transition: all 0.3s ease-out; 
                -ms-transition: all 0.3s ease-out; 
                -o-transition: all 0.3s ease-out; 
                transition: all 0.3s ease-out;
            }
        </style>
    </head>
    <body class="menu-collapsed">
        <main>
            <div class="pm-mobile-global-menu">
                <ul class="sf-menu pm-nav">
                    <li><a data-l10n-id="WAM_MENU_HOME" href="<?php echo base_url(); ?>#home"></a></li>
                    <li><a data-l10n-id="WAM_MENU_APPS" href="<?php echo base_url(); ?>#apps"></a></li>
                    <!--<li><a data-l10n-id="WAM_MENU_BLOG_WOMOZ" href="<?php echo base_url(); ?>#blog/womoz"></a></li>-->
                    <!--<li><a data-l10n-id="WAM_MENU_BLOG" href="<?php echo base_url(); ?>#blog"></a></li>-->
                    <li><a data-l10n-id="WAM_MENU_CONTRIBUTE" href="<?php echo base_url(); ?>#contribute"></a></li>
                </ul>
            </div>
            <div id="pm_layout_wrapper" class="pm-full-mode">
                <div class="pm-sub-menu-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="pm-sub-menu-info">
                                    <p data-l10n-id="WAM_SLOGAN"></p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                <div class="pm-sub-menu-book-event">
                                    <a data-l10n-id="WAM_CALENDAR" href="<?php echo base_url(); ?>#events"></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 no-padding-left">
                                <ul class="pm-sub-navigation">
                                    <li class="no-margin">
                                        <div class="pm-dropdown pm-language-selector-menu">
                                            <div class="pm-dropmenu">
                                                <p data-l10n-id="WAM_LANGUAGE" class="pm-menu-title"></p>
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <div class="pm-dropmenu-active">
                                                <ul>
                                                    <li><a data-l10n-id="WAM_LANGUAGE_PT_BR" data-l10n="pt-BR"></a></li>
                                                    <li><a data-l10n-id="WAM_LANGUAGE_EN_US" data-l10n="en-US"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="visible-lg visible-md visible-sm"><a href="https://www.facebook.com/pages/wam"><i class="fa fa-facebook-square"> Facebook</i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <header class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="pm-header-mobile-btn-container">
                                    <button type="button" class="navbar-toggle pm-main-menu-btn" id="pm-mobile-menu-trigger" ><i class="fa fa-bars"></i></button>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 pm-main-menu">
                                <nav class="navbar-collapse collapse">
                                    <ul class="sf-menu pm-nav">
                                        <li><a data-l10n-id="WAM_MENU_HOME" href="<?php echo base_url(); ?>#home"></a></li>
                                        <li><a data-l10n-id="WAM_MENU_APPS" href="<?php echo base_url(); ?>#apps"></a></li>
                                        <!--<li><a data-l10n-id="WAM_MENU_BLOG_WOMOZ" href="<?php echo base_url(); ?>#blog/womoz"></a></li>-->
                                        <!--<li><a data-l10n-id="WAM_MENU_BLOG" href="<?php echo base_url(); ?>#blog"></a></li>-->
                                        <li><a data-l10n-id="WAM_MENU_CONTRIBUTE" href="<?php echo base_url(); ?>#contribute"></a></li>
                                    </ul>
                                </nav>  
                            </div>
                        </div>
                    </div>
                </header>
                <div id="page-container">