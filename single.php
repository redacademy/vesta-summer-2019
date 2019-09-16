<?php get_header(); ?>

<div class="single-content-container">
    <div class="single-content-title-wrapper">
        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
    </div>

    <?php
    if( have_posts() ) :   
        while( have_posts() ) :   
        the_post(); ?>        
        <?php the_post_thumbnail( 'full' ); ?> 
    <?php the_content(); ?>

        <?php endwhile; ?>
    <?php the_posts_navigation(); ?> 

    <?php else : ?>
            <p>No posts found</p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>