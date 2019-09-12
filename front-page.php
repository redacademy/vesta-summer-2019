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
        <h1>Transforming society</h1>
        <p>Eliminating sexual harassment and assault by providing
        a secure reporting platform for individuals.</p>
        <div class="image-holder"></div>
    </section>
  
    <section class="home-the-problem">
        <div class="problem-article">
            <div class="header-style-container">
                <hr class="header-line">
                <h2>The Problem</h2>
            </div>
            <p>Sexual assault and harassment are so pervasive that 
                they have become commonplace. The personal and professional 
                consequences of reporting are so high that incidences are 
                rarely reported. </p>
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
        <img class="strength-numbers-image" src="<?php echo get_template_directory_uri() . '/images/Icons/circle_strenght_90.svg';?>" alt="95% icon">
            <p>Of those who are sexually assaulted do not report.</p>
        </div>
        <div class="strength-number-80">
            <hr class="strength-line">
        <img class="strength-numbers-image" src="<?php echo get_template_directory_uri() . '/images/Icons/circle_strenght_80.svg';?>" alt="80% icon">

            <p>Of those who have unwanted experiences in the workplace 
            do not report them.</p>
        </div>
        <div class="strength-number-85">
            <hr class="strength-line">
        <img class="strength-numbers-image" src="<?php echo get_template_directory_uri() . '/images/Icons/circle_strenght_85.svg';?>" alt="85% icon">

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
                <p> A web and mobile enabled platform that provides individuals with pathways 
                    to resources, to justice and to reporting while protecting their privacy. 
                    Vesta Community works in partnership with Sexual Assault Centres 
                    and soon Vesta Workplace will help Employers create safe, productive workplaces.</p>
                <input type="submit" class="what-we-offer-button" value="What We Offer">
        </div>
    </section>
  
    <section class="home-customer-stories">
        <div class="header-style-container">
                    <hr class="header-line">
                    <h2>What others are saying</h2>
        </div>
        <div class="customer-stories-carousel">
            <?php dynamic_sidebar('sidebar-stories'); ?>
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

                        