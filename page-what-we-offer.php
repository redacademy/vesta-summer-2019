<?php get_header(); ?>

<?php
if( have_posts() ) :   
    // Start WP Loop
    while( have_posts() ) :   
    the_post(); ?>         
<h1><?php the_title(); ?></h1>

    <!-- end of wp loop -->
    <?php endwhile; ?>

<?php the_posts_navigation(); ?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<main class="what-we-offer">
    <p>Our mission is to eliminate gender based violence
            by providing educational resources and easy-to-use and secure
            reporting platform for individuals.</p> 
    <section class="what-we-offer-container">
       <div class="what-we-offer-inner">
            <div class="what-we-offer-private">
                <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconPrivate.svg';?>">
                <div class="inner-private">
                    <h2>Private</h2>
                    <p>Available 24/7 from any device. No personal or identifying
                        information is nedded to access resources or to explore 
                        reporting options
                    </p>
                </div>
            </div>
            <div class="what-we-offer-confidential">
                <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconConfidential.svg';?>">
                <div class="inner-confidential">
                    <h2>Trustworthy</h2>
                    <p>Clear and concise consent language ensures there are no surprises
                        for the user</p>
                </div>
            </div>
            <div class="what-we-offer-trustworthy">
                <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconTrustworthy.svg';?>">
                <div class="inner-trustworthy">
                    <h2>Confidential</h2>
                    <p>No identifying information or data will be collected or disclosed
                        without the employee's explicit consent</p>
                </div>
            </div>
            <div class="what-we-offer-secure">
                <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconSecure.svg';?>">
                <div class="inner-secure">
                    <h2>Secure</h2>
                    <p>Comprehensive and robust security measures protect user content
                        against unauthorized access</p>
                </div>
            </div>
        </div>
        <div class="more-resources-button"><button>More Resources</button></div>
    </section>
    
    <section class="how-it-works">
            <div class="header-style-container">
                <hr class="header-line">
                <h2>How it works</h2>
            </div>
            <p> Vesta makes it safer for individuals to speak up and 
            easier for organizations to take action and prevent future 
            situations.</p>
            <div class="employee-employer-container">
                    <ul class="employee-employer-nav">
                        <li><a href="#tab-1" class="tab-1">
                            <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconEmployee.svg';?>">
                            <h3 class="employee">Community</h3>
                            <hr class="employee-employer-line"></a>
                        </li>
                        <li><a href="#tab-2"  class="tab-2">
                            <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconEmployer.svg';?>">
                            <h3 class="employer">Workplace</h3>
                            <hr class="employee-employer-line"></a>
                        </li>
                    </ul> 
            </div>
            <div class="steps-container">  
                <ul id="tab-1">
                    <li class="step1">
                        <h3>Community Title Placeholder</h3>
                        <p>Community Text Placeholder</p>
                        <iframe width="700" height="400" src="https://www.youtube.com/embed/pOmu0LtcI6Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </li>
                </ul>
                <ul id="tab-2">
                    <li class="step1">
                        <!-- Insert number 1 Icon -->
                        <h3>Workplace Title Placeholder</h3>
                        <p>Workplace Text Placeholder</p>
                        <iframe width="700" height="400" src="https://www.youtube.com/embed/YuwxJB-TOyM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </li>
                </ul>
            </div>
    </section>
    <div class="book-info-session-container">
        
        <h2>Book a Strategy Session</h2>
        <p>Want to know more how Vesta can help your organization?
            In this free session, you will discuss if Vesta is a good 
            fit for your organization.
        </p>
        <div class="book-info-session-button"><button>Info Session</button></div>
        
    </div>
</main>
<?php get_footer(); ?>

                        