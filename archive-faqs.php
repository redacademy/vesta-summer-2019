<?php get_header(); ?>

<?php
// The WP Loop
$faqs = new WP_Query(array('post_type' => 'faqs'));  
    while($faqs->have_posts() ) :   
        $faqs->the_post(); 

        // Custom query for categroies
        foreach((get_terms('faq_category')) as $faq_term) : ?>
        <h2><?php echo $faq_term->name; ?></h2>
        <h2><?php the_title(); ?></h2>
        <hr>



   <?php endforeach;
    
    
    
    ?> 
    

    <!-- end of wp loop -->
    <?php endwhile; ?>

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

                        