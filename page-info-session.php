<?php get_header(); ?>

<?php
if( have_posts() ) :  
    while( have_posts() ) :   
    the_post(); ?> 
    <section class="book-info-session">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </section>  
    <form action="" method="POST" id="info-session-form">
            <label for="book-session-user-name">Full Name</label>
            <br>
            <input type="text" id="book-session-user-name" name="full-name" placeholder="John Doe" required>
            <br>

            <label for="book-session-email">Work Email</label>
            <br>
            <input type="text" id="book-session-email" name="user-email" placeholder="johndoe@gmail.com" required>
            <br>

            <label for="book-session-company">Company Name</label>
            <br>
            <input type="text" id="book-session-company" name="company" placeholder="John's Industries">
            <br>

            <label for="book-session-message">Message (Optional)</label>
            <br>
            <textarea id="book-session-message" name="book-info-message" placeholder="Anything else you would like to tell us?"></textarea>
            <br>

            <input type="submit" class="book-info-session" value="Book info session">
        </form>   
        
        <aside class="info-session-confirm">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/iconMessageSent.svg" >
                <h1>Confirmed</h1>
                <div class="personal-msg"></div>
                <button>Return to home</button>
                <p>Interested in Resources? <a href="<?php echo get_post_type_archive_link('post'); ?>">Learn More</a></p>
        </aside>

    <?php endwhile; ?>

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>
                        