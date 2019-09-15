<?php get_header(); ?>

<div class="category-container">
    <div class="category-title-wrapper">
        <h2><?php echo single_cat_title() ?></h2>
        
    </div>

    <div class="category-content-container">
        <?php
        if( have_posts() ) :   
            while( have_posts() ) :   
            the_post(); ?>    
        <div class="category-content-wrapper">
            <div class="category-content">
                <a href="<?php the_permalink(); ?>">

                    <div class="post-thumbnail"?><?php the_post_thumbnail('full'); ?></div>
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                </a>
            </div>
        </div>


            <?php endwhile; ?>
        <?php the_posts_navigation(); ?> 

        <?php else : ?>
                <p>No posts found</p>
        <?php endif; ?>
            </div>
</div>

<?php get_footer(); ?>