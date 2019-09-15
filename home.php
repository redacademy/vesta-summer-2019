<?php get_header(); ?>


<main class="resources">

    <div class="resources-title-container">
        <p> Educational resources and guides.</p>
    </div>

    <div class="resources-content-container">

        <div class="resource-headers">
            <div class="resource-header">
                <img src="<?php echo get_template_directory_uri();?>/images/icons/iconEmployer.svg" alt="community icon">
                <h2>Workplace Resources</h2>
            </div>

            <div class="resource-header">
                <img src="<?php echo get_template_directory_uri();?>/images/icons/iconEmployee.svg" alt="community icon">
                <h2>Community Resources</h2>
            </div>
        </div>

        

        

        <section class="community-resources">
            

            <?php 
            $space = get_category_by_slug( 'community' );

            $sub_cats = get_categories(array(
                'child_of' => $space->term_id,
            ));

            foreach($sub_cats as $sub_cat) : ?>
                <h3><?php echo $sub_cat->name; ?></h3>
                    <div class="resource-sub-cat-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish', 
                            'orderby' => 'date',
                            'posts_per_page' => 3,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'name',
                                    'terms' => $sub_cat->name
                                ))
                        );

                        

                        $posts = new WP_Query($args);
                        if ( $posts->have_posts() ) :?>
                        <?php while($posts->have_posts()) :
                            $posts->the_post(); ?>

                            <div class="single-community-resource">
                                <a href="<?php the_permalink(); ?>">
                            
                                    <?php if($sub_cat->name === "Videos") : ?>
                                        <div class="video resource-media">
                                                <?php 
                                                $content = get_the_content();
                                                $media = get_media_embedded_in_content( $content ); ?>
                                                <?php echo $media[0]; ?>
                                        </div>

                                    <?php elseif($sub_cat->name === "Audio") : ?>
                                        <div class="audio resource-media">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/resources/audio-1293262_1280.png" alt="sound waves">
                                        </div>

                                    <?php else : ?>
                                        <div class="resource-media">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div><?php the_excerpt(); ?></div>
                                </a>
                            </div>
                        

                        <?php endwhile; ?> 
                    </div>

                
                    
                <?php wp_reset_postdata(); ?>
                <a href="<?php echo get_category_link($sub_cat->term_id); ?>" class="more-resources-btn">View All <?php echo $sub_cat->name ?></a>

                <?php endif; ?>
            
               
        <?php endforeach; ?>


            </section>

            <section class="workplace-resources">
                <h2>Workplace Resources</h2>

                

            </section>



         <h3> Can't find what you're looking for?</h3> 

        <form action="" method="post" class="resources-form">
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

    