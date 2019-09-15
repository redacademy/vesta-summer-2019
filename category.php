<?php get_header(); ?>

<div class="category-container">
    <div class="category-title-wrapper">
        <?php 
        $cat = get_the_category();
        $parentCatName = get_cat_name($cat[0]->parent);
        echo '<h1>' .  $parentCatName . '</h1>';
        ?>

        <?php 
        foreach((get_the_category()) as $category)
            echo '<pre>';
            // print_r($category);
            if ($category->parent == 0){
                echo $category->name;
            }
        ?>


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
        <?php the_posts_navigation(); ?> 

        <?php else : ?>
                <p>No posts found</p>
        <?php endif; ?>
            </div>
</div>

<?php get_footer(); ?>