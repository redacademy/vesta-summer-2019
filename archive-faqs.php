<?php get_header(); ?>
<!-- background shapes -->
<div class="top-left-shapes">
    <div class="big-rec-wrapper all-shapes-wrapper">
        <div class="big-rec"></div>
        <div class="sm-rec"></div>
        <div class="background-cover"></div>
    </div>
</div>
<h1 class="faq-header"> FAQ </h1>
<div class="faq-container">
    
<?php
$terms = get_terms('faq_category');
foreach($terms as $term) : ?>
    <div class="faq-category">
        <h3><?php echo $term->name;?></h3>
        <hr>
    </div>
    <div class="faq-list">
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
                <div class="faq-single-wrap">
                    <p><?php the_title(); ?></p><i class="fas fa-plus toggle-answer"></i>
                    <i class="fas fa-minus toggle-answer"></i>
                </div>
                <hr>
                <div class="faq-answer"><?php the_content(); ?></div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
    </div>
   
    <?php endforeach; ?>
    </div>

<?php get_footer(); ?>

                        


                        