<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('title'); ?></title>
</head>
<body <?php body_class(); ?>>
<a class="exit-button" href="https://www.cp24.com/">Exit Site</a>


<header>

    <div class="header-logo-container">
        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/icons/Vesta_Vertical_Main.png'; ?>" class="header-logo"/></a>
    </div>

    <div class="header-nav">
        <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
        <a href="<?php echo get_permalink( get_page_by_path( 'info-session' ) );?>"><button class="book-info-session">Info Session</button></a>
    </div>
</header>

<div class="all-page-wrapper">

