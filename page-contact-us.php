<?php get_header(); ?>

<section>
    <?php
    if( have_posts() ) :  
        while( have_posts() ) :   
        the_post(); ?> 
        <section class="contact-us-form">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </section>
            <div class="book-pg-dark-overlay grey-overlay"></div>

        <?php endwhile; ?>

    <?php else : ?>
            <p>No posts found</p>
    <?php endif; ?>
</section>
<section>
    <hr>
    <?php dynamic_sidebar('sidebar-contact'); ?>
</section>


<?php get_footer(); ?>