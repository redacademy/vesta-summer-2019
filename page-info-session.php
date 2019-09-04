<?php get_header(); ?>

<?php
if( have_posts() ) :  
    while( have_posts() ) :   
    the_post(); ?> 
    <section class="book-info-session">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </section>        

    <?php endwhile; ?>

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>

                        