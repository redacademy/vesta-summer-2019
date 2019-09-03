<?php get_header(); ?>


<section class="resources">

    <div class="resources-title-container">
        <h1><?php the_title(); ?></h1> <!--not working, need to fix-->
        <p> Educational resources and guides.</p>
    </div>

    <div class="resources-content-container">

        <?php
        if( have_posts() ) :   
            while( have_posts() ) :   
            the_post(); ?>         
        <?php the_content(); ?>
            <?php endwhile; ?>
        <?php the_posts_navigation(); ?> 
        <?php else : ?>
                <p>No posts found</p>
        <?php endif; ?>
        
    </div>

</section>

<?php get_footer(); ?>

                        