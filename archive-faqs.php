<?php get_header(); ?>

<?php
$terms = get_terms('faq_category');
foreach($terms as $term) : ?>
    <div class="faq-category">
        <h3><?php echo $term->name;?></h3>
        <hr>
    </div>
    <div class="faq-list"></div>
    <?php
    $faqs = new WP_Query(array(
        'post_type' => 'faqs',
        'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'faq_category',
                'field' => 'name',
                'terms' => $term->name
            ),
        ),
    ));
    while($faqs->have_posts() ) :   
        $faqs->the_post(); ?>
        <div class="faq-single">
            <p><?php the_title(); ?></p><i class="fas fa-plus toggle-answer"></i><i class="fas fa-minus toggle-answer"></i>
            <hr>
            <div class="faq-answer"><?php the_content(); ?></div>
        </div>
        

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    <?php endforeach; ?>

<!-- <?php the_posts_navigation(); ?>  -->


<?php get_footer(); ?>

                        