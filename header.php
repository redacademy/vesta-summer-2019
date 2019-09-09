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


<header>
    <a href="<?php echo get_home_url(); ?>">
    <img src="<?php echo get_template_directory_uri() . '/images/Icons/vest_logo.png'; ?>" class="header-logo"/>
    </a>

    <div class="header-nav">
        <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
    </div>
</header>

