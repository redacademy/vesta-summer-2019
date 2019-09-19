<?php get_header(); ?>
<!-- background shapes -->
<div class="top-left-shapes">
    <div class="big-rec-wrapper all-shapes-wrapper">
        <div class="big-rec"></div>
        <div class="sm-rec"></div>
        <div class="background-cover"></div>
    </div>
</div>

<div class="category-container">
    <div class="category-title-wrapper">


        <h2><?php 
        $term = get_queried_object();
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
                        if ($media){
                        echo $media[0];
                        }elseif ($term->name === "Audio") {
                            echo  '<img src="';
                            echo get_template_directory_uri(); 
                            echo '/images/resources/audio-1293262_1280.png" alt="sound waves" class="category-audio-icon"> ';
                        }else if(has_post_thumbnail()) {
                        echo '<div class="post-thumbnail"?>';
                        echo $postThumb = the_post_thumbnail('full'); 
                        echo '</div>';
                        }else {
                            echo '<img src="';
                            echo get_template_directory_uri(); 
                            echo '/images/icons/vest_logo.png" alt="Vesta logo" class="single-logo-placeholder">';
                        }
                    ?>
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