<?php get_header(); ?>

<section class="error-page">
    <div class="error-container">
        <img class="error-icon" src="<?php echo get_template_directory_uri() . '/images/Icons/404.png';?>">
        <h2>404</h2>
        <h1>Page Not Found</h1>
        <p>The page are looking for doesn't exist.
        <br>
        Click <a href="<?php echo esc_url(home_url( '/' ));?>">here</a> to go to Home Page</p>
    </div>
</section>

<?php get_footer(); ?>