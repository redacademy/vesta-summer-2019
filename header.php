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
    <img src="<?php echo get_template_directory_uri() . '/images/icons/vesta_logo.png'; ?>" class="header-logo"/>
    </a>
    <img src="<?php echo get_template_directory_uri() . '/images/icons/Vesta_LOGO_LETTERS.png'; ?>" class="header-logo-letter"/>


    <div class="header-nav">
        <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
        <button class="book-info-session">Info Session</button>
    </div>
    <div class="exit-button"><a href="https://www.cp24.com/"><button>Exit Site</button></a></div>
</header>

