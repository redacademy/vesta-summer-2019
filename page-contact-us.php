<?php get_header(); ?>
<!-- background shapes -->
<div class="bottom-right-shapes">
    <div class="big-rec-wrapper all-shapes-wrapper">
        <div class="big-rec"></div>
        <div class="sm-rec"></div>
        <div class="background-cover"></div>
    </div>
</div>



<div class="contact-title-container">
    <h1><?php the_title(); ?></h1>
    <p> For further informatio, you may either submit your query on this page,
        or use our following contacts to get in touch. </p>
</div>



<section class="contact-pg-wrapper">
    
    <?php
    if( have_posts() ) :  
        while( have_posts() ) :   
        the_post(); ?> 
        <section class="contact-us-form">
            <?php the_content(); ?>
            <?php endwhile; ?>

    <?php else : ?>
            <p>No posts found</p>
    <?php endif; ?>
        <div class="contact-pg-dark-overlay grey-overlay"></div>
        </section>
        

    <section class="vesta-contact-info">
        <?php dynamic_sidebar('sidebar-contact'); ?>
    </section>

</section>


<?php get_footer(); ?>