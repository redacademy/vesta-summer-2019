<?php get_header(); ?>

<?php
if( have_posts() ) :   
    // Start WP Loop
    while( have_posts() ) :   
    the_post(); ?>         
<h2><?php the_title(); ?></h2>

    <!-- end of wp loop -->
    <?php endwhile; ?>

<?php the_posts_navigation(); ?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<main class="what-we-offer">
    <section class="what-we-offer-inner">
        <p>Our mission is to eliminate sexual harassment in the workplace
        by providing educational resources and easy-to-use and secure
        reporting platform for employees and employers.</p> 
        <div class="what-we-offer-private">
            <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconPrivate.svg';?>">
            <div class="inner-private">
                <h2>Private</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor</p>
            </div>
        </div>
        <div class="what-we-offer-confidential">
            <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconConfidential.svg';?>">
            <div class="inner-confidential">
                <h2>Confidential</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do </p>
            </div>
        </div>
        <div class="what-we-offer-trustworthy">
            <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconTrustworthy.svg';?>">
            <div class="inner-trustworthy">
                <h2>Trustworthy</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt</p>
            </div>
        </div>
        <div class="what-we-offer-secure">
            <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconSecure.svg';?>">
            <div class="inner-secure">
                <h2>Secure</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do</p>
            </div>
        </div>
        <button class="more-resources-button">More Resources</button>
    </section>
    <section class="how-it-works">
            <div class="header-style-container">
                <hr class="header-line">
                <h2>How it works</h2>
            </div>
            <p> Vesta makes it safer for employees to speak up and 
            easier for employers to take action and prevent future 
            situations.</p>
            <div class="employee-employer-container">
                <div class="employee">
                    <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconEmployee.svg';?>">
                    <h3 class="employee">Employee</h3>
                    <hr class="employee-employer-line">
                </div>  
                <div class="employer">
                    <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconEmployer.svg';?>">
                    <h3 class="employer">Employer</h3>
                    <hr class="employee-employer-line">
                </div>
            </div>
            <div class="steps-container">  
                <div class="step1">
                    <!-- Insert number 1 Icon -->
                    <h3>Create an account</h3>
                    <p>Create an account in our webapp and include the 
                    name of the company you are currently working for.</p>
                </div>
                <div class="step2">
                    <!-- Insert number 2 Icon -->
                    <h3>Document the details</h3>
                    <p>Write a report in your own privacy. We encourage 
                    you to be as thorough as you want to help you HR team 
                    take action. </p>
                </div>
                <div class="step3">
                    <!-- Insert number 3 Icon -->
                    <h3>Submit or save for later</h3>
                    <p>We can submit your report in your behalf in 
                    case you want to stay anonymous. Or you can choose 
                    to save and send it once you are ready. </p>
                </div>
            </div>
    </section>
    <section class="book-info-session">
        <h2>Book a free info session with VESTA today</h2>
        <h3>What will you get?</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Nunc sed blandit libero volutpat sed cras ornare arcu dui. Rhoncus 
        dolor purus non enim praesent elementum facilisis leo. </p>
        <button class="book-info-session-button">Book Info Session</button>
    </section>
</main>
<?php get_footer(); ?>

                        