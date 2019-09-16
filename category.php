<?php get_header(); ?>

<div class="category-container">
    <div class="category-title-wrapper">


        <h2><?php $term = get_queried_object();
        echo $term->slug;
        ?></h2>
        
    </div>

    <div class="category-content-container">
        <?php 
        if( have_posts() ) :   
            while( have_posts() ) :   
            the_post(); ?>    
        <div class="category-content-wrapper">
            <div class="category-content">
                <a href="<?php the_permalink(); ?>">
                    <?php 
                    $content = get_the_content();
                    $media = get_media_embedded_in_content( $content ); 
                    echo $media[0];?>
                    <div class="post-thumbnail"?><?php the_post_thumbnail('full'); ?></div>
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                </a>
            </div>
        </div>
        

        <?php endwhile; ?>
        

        </div>
</div>
        <?php else : ?>
                <h3>No posts found</h3>

        <?php endif; ?>
        <div class="category-nav">
        <?php the_posts_pagination( array(
        'mid_size' => 2,
        'prev_text' => __( 'Previous Posts', 'textdomain' ),
        'next_text' => __( 'Next Posts', 'textdomain' ),
        )); ?>


        </div>


<?php get_footer(); ?>