<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?php bloginfo('name') ?></title>
    <!--css-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <!--fonter-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Hook-->
    <?php wp_head(); ?>
</head>

<body>
    <!--Nav desktop-->
    <div class="container">
        <nav id="menu">
            <?php
            wp_nav_menu();
            ?>
            <a href="<?php echo get_home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/images/solveigsstugby.svg" alt="logotyp" class="logo"></a>
        </nav>


        <!--Nav mobil/tablet-->
        <nav id="menu-mobile">
        <a href="<?php echo get_home_url() ?>"> <img src="<?php echo get_template_directory_uri() ?>/images/solveigsstugby.svg" alt="logotyp" class="logo" width="209"></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>

        <nav id="links-mobile">
            <?php
            wp_nav_menu();
            ?>
        </nav>


        <!--Två olika headers beroende på enhet-->
        <img src="<?php echo get_template_directory_uri() ?>/images/headermobile.jpg" alt="header" class="headermobile">
        <img src="<?php echo get_template_directory_uri() ?>/images/header.jpg" alt="header" class="header">