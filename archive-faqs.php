<?php get_header(); ?>

<?php 
$faqs = new WP_Query( array('post-type' => 'faqs'));
while($faqs->have_posts()) :
    $faqs->the_post(); ?>
    <?php $cats =  get_the_category(); 
    echo '<pre>';
    var_dump($cats); 
    echo '</pre>'; ?>
    <?php foreach((get_the_category()) as $category) : ?>
    <div class="faq-category">
        <h2><?php echo $category->cat_name ?></h2>
    </div>
<?php endforeach; ?>

<?php endwhile; ?>



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

                        