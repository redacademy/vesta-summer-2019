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

<!-- Main Content of Front Page -->
<section class="home">
<img src="./Assets/" alt="">
        <h1>Transforming the workplace</h1>
        <p>Eliminating sexual harassment in the workplace by providing
        a secure reporting platform for employees and employers.</p>
        <div class="image-holder"></div>
</section>




    <div class="our-vision-mission">
            <div class="headerStyleContainer">
                <hr class="headerLine">
                <h2>Our Vision & Mission</h2>
            </div>



<?php get_footer(); ?>

                        