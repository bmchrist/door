<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ourdoor</title>
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url(); ?>css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" />
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url(); ?>css/style.css" />
</head>
<body>
    <div class="navbar navbar-static-top">
        <div class="navbar-inner">
            <ul class="nav nav-main">
                <li class="first <?php echo $page == 'home' ? 'active' : '' ?>">
                    <?php echo anchor('app/index', 'Home'); ?>
                </li>
                <li class="<?php echo $page == 'camera' ? 'active' : '' ?>">
                    <?php echo anchor('app/camera', 'Camera'); ?>
                </li>
                <li class="<?php echo $page == 'config' ? 'active' : '' ?>">
                    <?php echo anchor('app/config', 'Config'); ?>
                </li>
            </ul>
        </div>
    </div>
    <div id="main">