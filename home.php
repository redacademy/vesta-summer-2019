<?php get_header(); ?>


<main class="resources">

    <div class="resources-title-container">
        <p> Educational resources and guides.</p>
    </div>

    <div class="resources-content-container">

    <?php wp_list_categories( array(
                  'title_li'=> __( '' ),
                  'orderby'=> 'name',
              )); ?> 


<!-- <?php 

// $catt = get_categories();
// echo '<pre>';
// print_r($catt);

?> -->



<?php

$cats = get_posts(array(
    'category' => 4,
    'posts_per_page' => 3,
    'post_status' => 'published', 
    'orderby' => 'date', 
));

echo '<pre>';
// print_r($cats);

foreach ($cats as $cat){
    echo '<pre>';
    echo $cat->post_excerpt;    
}

?>
        <!-- <?php
        if( have_posts() ) :   
            while( have_posts() ) :   
            the_post(); ?>         
        <?php the_content(); ?>
            <?php endwhile; ?>
        <?php the_posts_navigation(); ?> 
        <?php else : ?>
                <p>No posts found</p>
        <?php endif; ?>
         -->
    </div>

</main>

<?php get_footer(); ?>

                        