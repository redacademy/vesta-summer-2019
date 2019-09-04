<?php get_header(); ?>


<main class="resources">

    <div class="resources-title-container">
        <p> Educational resources and guides.</p>
    </div>

    <div class="resources-content-container">


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
            
            $content = $cat->post_content;
            $media = get_media_embedded_in_content( $content );
            echo $media[0];

            echo '<p>';
            echo $cat->post_excerpt;  
            echo '</p>'; 

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
            $content = $cat->post_content;
            $media = get_media_embedded_in_content( $content );
            echo $media[0];

            echo '<p>';
            echo $cat->post_excerpt;  
            echo '</p>';  
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


<p> Can't find what you're looking for? <a href=" " class="resources-book-now-link" >Book info session now.</a></p> 



<!-- <?php 
// echo '<pre>';
// print_r($cats);
?>  -->



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

                        