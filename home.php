<?php get_header(); ?>


<main class="resources">

    <div class="resources-title-container">
        <p> Educational resources and guides.</p>
    </div>

    <div class="resources-content-container">

    <!-- <?php wp_list_categories( array(
                  'title_li'=> __( '' ),
                  'orderby'=> 'name',
              )); ?>  -->


<?php 

// $catt = get_categories();
echo '<pre>';
// print_r($catt);

?>

<div class="community-videos">
    <h3> Videos </h3>
        <?php
        // Community Video
        $cats = get_posts(array(
            'category_name' => 'video-community',
            'posts_per_page' => 3,
            'post_status' => 'published', 
            'orderby' => 'date', 
            
        ));

        foreach ($cats as $cat){
            echo '<p>';
            echo $cat->post_excerpt;  
            echo '</p>';  
            echo get_the_post_thumbnail($cat);
        }?>
</div>


<div class="community-articles">
    <h3> Articles </h3>
        <?php
        //Community Articles
        $cats = get_posts(array(
            'category_name' => 'article-community',
            'posts_per_page' => 3,
            'post_status' => 'published', 
            'orderby' => 'date', 
        ));

        foreach ($cats as $cat){
            echo '<p>';
            echo $cat->post_excerpt;  
            echo '</p>';  
            echo get_the_post_thumbnail($cat);

        }?>
</div>


<div class="workplace-videos">
    <h3> Videos </h3>
        <?php 
        // Workplace Video
        $cats = get_posts(array(
            'category_name' => 'video-workplace',
            'posts_per_page' => 3,
            'post_status' => 'published', 
            'orderby' => 'date', 
        ));

        foreach ($cats as $cat){
            echo '<p>';
            echo $cat->post_excerpt;  
            echo '</p>';  
            echo get_the_post_thumbnail($cat);
        }?>
</div>


<div class="workplace-articles">
    <h3> Articles </h3>
        <?php
        //Workplace Article
        $cats = get_posts(array(
            'category_name' => 'article-workplace',
            'posts_per_page' => 3,
            'post_status' => 'published', 
            'orderby' => 'date', 
        ));

        foreach ($cats as $cat){
            echo '<p>';
            echo $cat->post_excerpt;  
            echo '</p>';  
            echo get_the_post_thumbnail($cat);

        }
        ?>
</div>






<?php 
// echo '<pre>';
// print_r($cats);


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

                        