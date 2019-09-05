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

<?php the_posts_navigation(); ?> 

</div>


<h3> Can't find what you're looking for?</h3> 

<form action="mailto:someone@example.com" method="post" class="resources-form">
    <h3>Name:</h3>
        <input type="text" name="resources-name-form" class="resources-name-form">
    <br>

    <h3>E-mail:</h3>
        <input type="text" name="resources-email-form" class="resources-email-form">
    <br>

    <h3>Comment:</h3>
        <textarea type="text" name="resources-textarea-form" clas="resources-textarea-form"></textarea>
    <br>
        <input type="submit" value="Send" class="resources-submit-BTN">
</form>

    </div>

</main>

<?php get_footer(); ?>

                        