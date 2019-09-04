<?php get_header(); ?>

<?php
if( have_posts() ) :   
    // Start WP Loop
    while( have_posts() ) :   
    the_post(); ?>         
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

    <!-- end of wp loop -->
    <?php endwhile; ?>

<?php the_posts_navigation(); ?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<main class="what-we-offer">
    <h1>What We Offer</h1>
    <p>Our mission is to eliminate sexual harassment in the workplace
    by providing educational resources and easy-to-use and secure
    reporting platform for employees and employers.</p> 
    <div class="what-we-offer-private">
        <img src="<?php echo get_template_directory_uri() . '/Assets/Icons/IconLinkedIn.svg';?>">
    </div>

</main>







<?php get_footer(); ?>

                        