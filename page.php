<?php get_header(); ?>

<!-- background shapes -->
<div class="bottom-right-shapes">
    <div class="big-rec-wrapper all-shapes-wrapper">
        <div class="big-rec"></div>
        <div class="sm-rec"></div>
        <div class="background-cover"></div>
    </div>
</div>

<div class="page-content-container">
    <div class="page-content-title-wrapper">
        <h2><?php the_title(); ?></h2>
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