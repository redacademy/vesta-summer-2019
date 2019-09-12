<?php get_header(); ?>


<main class="resources">

    <div class="resources-title-container">
        <p> Educational resources and guides.</p>
    </div>


    <div class="resources-content-container">

        <section class="community-resources">

            <?php 
            $space = get_category_by_slug( 'community' );
            // echo 'Community Cat';
            // echo '<pre>';
            // print_r($space);
            // echo '</pre>';


            $sub_cats = get_categories(array(
                'child_of' => $space->term_id,
            ));
            // echo '<pre>';
            // print_r($sub_cats);
            // echo '</pre>';


            foreach($sub_cats as $sub_cat) : ?>
            <?php 
            echo '<pre>';
            var_dump($sub_cat); 
            echo '</pre>';
            ?>

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
                        )
                        )
                    );

                $posts = new WP_Query($args);
                while($posts->have_posts()) :
                    $posts->the_post(); ?>
                    <div class="stuff">
                        <h1><?php the_title(); ?></h1>

                    <!-- use if statements to check sub cat name and then get either audio, video or article -->
                    <!-- OR just check if content exists then get specific content -->
                        <?php if($sub_cat->name === "Video Community") : ?>
                            <div class="video">
                                <!-- get video -->
                            </div>
                        <?php endif; ?>
                        <div><?php the_excerpt(); ?></div>
                    </div>
                   

                   

               <?php endwhile;  ?>
               <?php wp_reset_query(); ?>
                    
                    
                <!-- </div> -->
            <?php endforeach; ?>

            
          
        </section>

        <section class="workplace-resources">

            

        </section>


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

    