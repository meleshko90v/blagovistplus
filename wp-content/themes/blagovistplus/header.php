<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Title  -->
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="icon" src="<?php echo get_template_directory_uri()?>/assets/img/core-img/plus.png" type="image/x-icon">

    <?php wp_head(); ?>
</head>

<body>
<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="/home"><img class="logo" src="<?php echo get_template_directory_uri()?>/assets/img/core-img/logo.png" alt="Logo"> Медичний центр <br> Благовіст-Плюс <br> <p class="zero"> Європейський рівень професіоналізму</p></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#medilifeMenu" aria-controls="medilifeMenu"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="medilifeMenu">
                                <!-- Menu Area -->
                                <?php
                                 wp_nav_menu(
                                 array(
                                 'menu_id' 		=> '',
                                 'menu_class'	=> 'navbar-nav ml-auto active',
                                 'container'	=> '',
                                 'items_wrap'	=> '<ul id="%1$s" class="%2$s">%3$s</ul>'
                                 )
                                     )
                                ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->