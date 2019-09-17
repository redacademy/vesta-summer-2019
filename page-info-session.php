

<?php get_header(); ?>
<!-- background shapes -->
<div class="bottom-shapes">
    <div class="big-shape"></div>
    <div class="sm-shape"></div>
    <div class="section-cover"></div>
</div>

<?php
if( have_posts() ) :  
    while( have_posts() ) :   
    the_post(); ?> 
    <section class="book-info-session">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </section>
        <div class="book-pg-dark-overlay grey-overlay"></div>

    <?php endwhile; ?>

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>



<?php get_footer(); ?>
                        