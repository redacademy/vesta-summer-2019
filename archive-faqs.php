<?php get_header(); ?>

<?php
$terms = get_terms('faq_category');
foreach($terms as $term) :
    echo $term->name;
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
        $faqs->the_post(); 
        the_title();
        the_content();
        wp_reset_query()
?>

    <?php endwhile; ?>
    <hr>
    <?php endforeach; ?>

<?php the_posts_navigation(); ?> 






<!-- if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <?php foreach((get_the_category()) as $category) {echo $category->cat_name . ' ';} ?><br>
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br>
    <?php
    // endwhile;
// } -->

wp_reset_query();

?>

<?php get_footer(); ?>

                        