<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Name here Portfolio - <?php if(isset($title)){echo $title;}else{echo "URL HERE";}?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGINS -->
    <link href="<?php echo base_url(); ?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGINS -->
    <!-- BEGIN PAGES CSS -->
    <link class="<?php echo base_url(); ?>main-stylesheet" href="<?php echo base_url(); ?>pages/css/pages.css" rel="stylesheet" type="text/css" />
    <link class="<?php echo base_url(); ?>main-stylesheet" href="<?php echo base_url(); ?>pages/css/pages-icons.css" rel="stylesheet" type="text/css" />
    <!-- END PAGES CSS -->
  </head>
  <body class="pace-dark">
    <!-- BEGIN HEADER -->
    <nav class="header bg-header transparent-dark " data-pages="header" data-pages-header="autoresize" data-pages-resize-class="dark">
      <div class="container relative">
        <!-- BEGIN LEFT CONTENT -->
        <div class="pull-left">
          <!-- .header-inner Allows to vertically Align elements to the Center-->
          <div class="header-inner">
            <!-- BEGIN LOGO -->
            <img src="<?php echo base_url(); ?>assets/images/logo_black.png" width="152" height="21" data-src-retina="<?php echo base_url(); ?>assets/images/logo_black_2x.png" class="logo" alt="">
            <img src="<?php echo base_url(); ?>assets/images/logo_white.png" width="152" height="21" data-src-retina="<?php echo base_url(); ?>assets/images/logo_white_2x.png" class="alt" alt="">
          </div>
        </div>
        <!-- BEGIN HEADER TOGGLE FOR MOBILE & TABLET -->
        <div class="pull-right">
          <div class="header-inner">
            <div class="visible-sm-inline visible-xs-inline menu-toggler pull-right p-l-10" data-pages="header-toggle" data-pages-element="#header">
              <div class="one"></div>
              <div class="two"></div>
              <div class="three"></div>
            </div>
          </div>
        </div>
        <!-- END HEADER TOGGLE FOR MOBILE & TABLET -->
        <!-- BEGIN RIGHT CONTENT -->
        <div class="menu-content mobile-dark pull-right clearfix" data-pages-direction="slideRight" id="header">
          <!-- BEGIN HEADER CLOSE TOGGLE FOR MOBILE -->
          <div class="pull-right">
            <a href="#" class="padding-10 visible-xs-inline visible-sm-inline pull-right m-t-10 m-b-10 m-r-10" data-pages="header-toggle" data-pages-element="#header">
              <i class=" pg-close_line"></i>
            </a>
          </div>
          <!-- END HEADER CLOSE TOGGLE FOR MOBILE -->
          <!-- BEGIN MENU ITEMS -->
          <div class="header-inner">
            <ul class="menu">
              <li>
                <a href="<?php echo base_url(); ?>home" <?php if($title == "Home"){echo 'class="active"';}?>>Home</a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>about" <?php if($title == "About"){echo 'class="active"';}?>>About me</a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>portfolio" <?php if($title == "Portfolio"){echo 'class="active"';}?>>Portfolio </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>contact"<?php if($title == "Contact"){echo 'class="active"';}?>>Contact</a>
              </li>
            </ul>
            <!-- BEGIN COPYRIGHT FOR MOBILE -->
            <div class="font-arial m-l-35 m-r-35 m-b-20 visible-sm visible-xs m-t-20">
              <p class="fs-11 small-text muted">Copyright &copy; <?php echo date("Y"); ?> Name here. All Rights Reserved.</p>
            </div>
            <!-- END COPYRIGHT FOR MOBILE -->
          </div>
          <!-- END MENU ITEMS -->
        </div>
      </div>
    </nav>
    <!-- END HEADER -->