<?php get_header(); ?>

<section class="contact-pg-wrapper">
    <?php
    if( have_posts() ) :  
        while( have_posts() ) :   
        the_post(); ?> 
        <section class="contact-us-form">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php endwhile; ?>

    <?php else : ?>
            <p>No posts found</p>
    <?php endif; ?>
        <div class="contact-pg-dark-overlay grey-overlay"></div>
        </section>
        

    <section class="vesta-contact-info">
        <?php dynamic_sidebar('sidebar-contact'); ?>
    </section>

</section>


<?php get_footer(); ?>