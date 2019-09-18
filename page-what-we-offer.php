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
                <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconPrivate.svg';?>" class="private-icon">
                <div class="inner-private">
                    <h2>Private</h2>
                    <p>Available 24/7 from any device. No personal or identifying
                        information is nedded to access resources or to explore 
                        reporting options
                    </p>
                </div>
            </div>
            <div class="what-we-offer-confidential">
                <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconConfidential.svg';?>" class="confidential-icon">
                <div class="inner-confidential">
                    <h2>Trustworthy</h2>
                    <p>Clear and concise consent language ensures there are no surprises
                        for the user</p>
                </div>
            </div>
            <div class="what-we-offer-trustworthy">
                <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconTrustworthy.svg';?>" class="trustworthy-icon">
                <div class="inner-trustworthy">
                    <h2>Confidential</h2>
                    <p>No identifying information or data will be collected or disclosed
                        without the employee's explicit consent</p>
                </div>
            </div>
            <div class="what-we-offer-secure">
                <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconSecure.svg';?>" class="secure-icon">
                <div class="inner-secure">
                    <h2>Secure</h2>
                    <p>Comprehensive and robust security measures protect user content
                        against unauthorized access</p>
                </div>
            </div>
        </div>
        <div class="more-resources-button">
        <a href="<?php echo get_home_url(); ?>/resources"><button>More Resources</button></a>
        </div>
    </section>
    
    <section class="how-it-works">
            <!-- <div class="how-it-works-hr-container"> -->
                <div class="header-style-container">
                    <hr class="header-line">
                    <h2>How it works</h2>
                </div>
             <!-- </div> -->

            <p> Vesta makes it safer for individuals to speak up and 
            easier for organizations to take action and prevent future 
            situations.</p>
            <div class="employee-employer-container">
                    <ul class="employee-employer-nav">
                        <li><a href="#tab-1" class="tab-1">
                            <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconEmployer.svg';?>">
                            <h3 class="workplace">Workplace</h3>
                            <hr class="workplace-line"></a>
                        </li>
                        <li><a href="#tab-2"  class="tab-2">
                        <img src="<?php echo get_template_directory_uri() . '/images/Icons/IconEmployee -plum 1.52.00 PM.svg';?>">
                            <h3 class="community">Community</h3>
                            <hr class="community-line"></a>


                            
                        </li>
                    </ul> 
            </div>
            <div class="steps-container">  
                <ul id="tab-1">
                    <li class="step1">
                        <?php dynamic_sidebar('sidebar-workplace'); ?>
                    </li>
                </ul>
                <ul id="tab-2">
                    <li class="step1">
                        <?php dynamic_sidebar('sidebar-community'); ?>
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
        <div class="book-info-session-button"><a href="<?php echo get_permalink( get_page_by_path( 'info-session' ) );?>"><button>Info Session</button></a></div>
        
    </div>
</main>
<?php get_footer(); ?>

                        