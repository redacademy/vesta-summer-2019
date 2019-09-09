<?php get_header(); ?>

<section class="404-page">
    <img class="404-icon" src="<?php echo get_template_directory_uri() . '/images/Icons/404.png';?>">
    <h2 class="404">404</h2>
    <h1 class="404-page-not-found">Page Not Found</h1>
    <p>The page are looking for doesn't exist.
    Click <a href="<?php echo esc_url(home_url( '/' ));?>">here</a> to go to Home Page</p>
</section>

<?php get_footer(); ?>