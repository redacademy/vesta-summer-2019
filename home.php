<?php get_header(); ?>


<main class="resources">

    <div class="resources-title-container">
        <p> Educational resources and guides.</p>
    </div>


    <div class="resources-content-container">

        <section class="community-resources">

            <?php 
            $space = get_category_by_slug( 'community' );
            echo 'Community Cat';
            echo '<pre>';
            print_r($space);
            echo '</pre>';


            echo 'sub categories';
            $sub_cats = get_categories(array(
                'child_of' => $space->term_id,
            ));
            echo '<pre>';
            print_r($sub_cats);
            echo '</pre>';


            foreach($sub_cats as $sub_cat) : ?>
            <?php var_dump($sub_cat); ?>

                <?php
                $posts = get_posts(array(
                        'category_name' => $sub_cat->name,
                        'post_type' => 'post',
                        'post_status' => 'published', 
                        'orderby' => 'date', 
                    ));
                    echo 'posts';
                    echo '<pre>';
                    print_r($posts);
                    echo '</pre>';

                    ?>
                    
                    
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

    