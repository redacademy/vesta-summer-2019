<?php get_header(); ?>



<?php
if( have_posts() ) :   
    // Start WP Loop
    while( have_posts() ) :   
    the_post(); ?>         

<!-- <h2><?php the_title(); ?></h2> -->
<?php the_content(); ?>

    <!-- end of wp loop -->
    <?php endwhile; ?>

<?php the_posts_navigation(); ?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>


<main class="home">
  
    <section class="home-transforming">
        <img src="<?php echo get_template_directory_uri() . '/images/Homepage/img__homepage__hero.png';?>" alt="Vesta Woman">
        <h1>Transforming the workplace</h1>
        <p>Eliminating sexual harassment in the workplace by providing
        a secure reporting platform for employees and employers.</p>
        <div class="image-holder"></div>
    </section>
  
    <section class="home-the-problem">
        <div class="problem-article">
            <div class="header-style-container">
                <hr class="header-line">
                <h2>The Problem</h2>
            </div>
            <p>One credible complaint can decrease stock prices by as
            much as 30%. Small and medium sized companies do not have 
            the resources needed to mitigate the cost, risks and impact 
            that a complaint or viral tweet can have to thier reputation.
        </div>
        <div class="problem-widget">
        </div>
    </section>
  
    <section class="home-strength">
        <div class="header-style-container">
            <hr class="header-line">
            <h2>Strength in Numbers</h2>
        </div>
        <div class="strength-number-95">
            <hr class="strength-line">
            <p>Of those who are sexually assaulted do not report.</p>
        </div>
        <div class="strength-number-80">
            <hr class="strength-line">
            <p>Of those who have unwanted experiences in the workplace 
            do not report them.</p>
        </div>
        <div class="strength-number-85">
            <hr class="strength-line">
            <p>Of survivors disclose thier experience informally but 
            not officially for fear of retaliation, judgement,
            coercion, or exclusion.</p>
        </div>
    </section>
  
    <section class="home-solution">
        <img class="solution-image" src="<?php echo get_template_directory_uri() . '/images/homepage/img_homepage_thesolution.png';?>" alt="Vesta on devices">
        <div class="inner-solution">
            <div class="header-style-container">
                <hr class="header-line">
                <h2>The Solution</h2>
            </div>
                <p> Vesta interacts with the individual to help them share 
                thier experience and actively participate in thier own case,
                should they choose to. We provide an easy to use and safe 
                online platform.</p>
                <input type="submit" class="what-we-offer-button" value="What We Offer">
        </div>
    </section>
  
    <section class="home-customer-stories">
        <div class="header-style-container">
                    <hr class="header-line">
                    <h2>Our Customer Stories</h2>
        </div>
        <div class="inner-customer-stories">
            <div class="customer-stories-title">
            </div>
            <div class="customer-stories-content">
            </div>
        </div>
    </section>
  
    <section class="trusted-partners">
        <div class="partners-list">
            <a href="https://cfc-swc.gc.ca/index-en.html" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/Partners/logo-canada.png';?>" alt="Government of Canada"></a>
            <a href="http://www.legalinnovationzone.ca/startup/vesta-social-innovation-technologies/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/Partners/legal-innovation-zone-logo.png';?>" alt="Legal Innovation Zone"></a>
            <a href="https://www.ryerson.ca/svz/projects/vesta/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/Partners/social-venture-zone-logo.jpg';?>" alt="Social Venture Zone"></a>
            <img src="<?php echo get_template_directory_uri() . '/images/Partners/unilever_edited.png';?>" alt="Unilever Impact">
        </div>
    </section>
  
    <section class="home-subscribe">
      <h2> Subscribe to get the latest updates</h2>
      <form class="subscribe-form">
            <label>Enter your Email address</p>
            <input type="text" class="subscribe-email" placeholder="johndoe@gmail.com">
            <input type="submit" class="subscribe-button" value="Subscribe">
        </form>
    </section>

</main>

<?php get_footer(); ?>

                        