<?php get_header(); ?>

<!-- background shapes -->
<div class="front-page-shapes">
    <div class="big-rec-wrapper all-shapes-wrapper">
    <div class="background-cover"></div> 
        <div class="big-rec"></div>
        <div class="sm-rec"></div>
        <div class="sm-rec top-right-sm-rec"></div>

        <div class="big-rec midde-left-rec"></div>

        <div class="background-cover background-rec-bottom"></div>
        <div class="background-cover background-rec-bottom-two"></div>
    </div>
</div>

<?php
if( have_posts() ) :  
    while( have_posts() ) :   
    the_post(); ?>         

<?php the_content(); ?>

    <?php endwhile; ?>

<?php the_posts_navigation(); ?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>


<main class="home">
  
    <section class="home-transforming">
        
        <div class="vesta-transforming-workplace">
            <img src="<?php echo get_template_directory_uri() . '/images/Icons/Vesta Name Group.svg';?>" alt="Vesta">
            <h2>Transforming society</h2>
            <p>Eliminating sexual harassment and assault by providing
            a secure reporting platform for individuals.</p> 
        </div>
        <div class="lady-wrapper">
            <img src="<?php echo get_template_directory_uri() . '/images/Homepage/img__homepage__hero.png';?>" alt="Vesta Woman">
        </div>
    </section>
  
    <section class="home-the-problem">
        <!-- <div class="problem-article"> -->
            <!-- <div class="header-style-container">
                <hr class="header-line"> -->
                <!-- <h2>The Problem</h2> -->
            <!-- </div> -->
            <!-- <p>Sexual assault and harassment are so pervasive that 
                they have become commonplace. The personal and professional 
                consequences of reporting are so high that incidences are 
                rarely reported. </p> -->
        </div>
        <div class="problem-widget">
            
             <?php dynamic_sidebar('sidebar-the-prob'); ?>
        </div>
    </section>
  
    <section class="home-strength">
        <div class="header-style-container">
            <hr class="header-line">

            <h2>Strength in Numbers</h2>
        </div>
        <div class="strength-numbers">
            <div class="strength-number-95">
                <img src="<?php echo get_template_directory_uri() . '/images/Icons/circle_strenght_90.svg';?>" alt="95%">
        
                <hr class="strength-line">
                <p>Of those who are sexually assaulted do not report.</p>
            </div>
            <div class="strength-number-80">
                <img src="<?php echo get_template_directory_uri() . '/images/Icons/circle_strenght_80.svg';?>" alt="80%">
                <hr class="strength-line">
                <p>Of those who have unwanted experiences in the workplace 
                do not report them.</p>
            </div>
            <div class="strength-number-85">
                <img src="<?php echo get_template_directory_uri() . '/images/Icons/circle_strenght_85.svg';?>" alt="85%">
                <hr class="strength-line">
                <p>Of survivors disclose thier experience informally but 
                not officially for fear of retaliation, judgement,
                coercion, or exclusion.</p>
            </div>
    </div>
    </section>
  
    <section class="home-solution">
        <div class="solution-image-container">
            <img class="solution-image" src="<?php echo get_template_directory_uri() . '/images/homepage/img_homepage_thesolution.png';?>" alt="Vesta on devices">
        </div>
        <div class="inner-solution">
            <div class="header-style-container">
                <hr class="header-line">
                <h2>The Solution</h2>
            </div>
                <p> A web and mobile enabled platform that provides individuals with pathways 
                    to resources, to justice and to reporting while protecting their privacy. 
                    Vesta Community works in partnership with Sexual Assault Centres 
                    and soon Vesta Workplace will help Employers create safe, productive workplaces.</p>
                    <a href="<?php echo get_home_url(); ?>/what-we-offer"><button class="what-we-offer-button">What We Offer</button></a>
        </div>
    </section>
  
    <section class="home-customer-stories">
        <div class="header-style-container">
                    <hr class="header-line">
                    <h2>What Others are Saying</h2>
        </div>
        <div class="customer-stories-carousel">
            <?php dynamic_sidebar('sidebar-stories'); ?>
        </div>
        
    </section>
  
    <section class="trusted-partners">
        <div class="header-style-container">
            <hr class="header-line">
            <h2>Our Trusted Partners</h2>
        </div>
        <div class="partners-list">
            <a href="https://cfc-swc.gc.ca/index-en.html" target="_blank"><img class="govt-canada" src="<?php echo get_template_directory_uri() . '/images/Partners/logo-canada.png';?>" alt="Government of Canada"></a>
            <a href="http://www.legalinnovationzone.ca/startup/vesta-social-innovation-technologies/" target="_blank"><img class="legal-innovation" src="<?php echo get_template_directory_uri() . '/images/Partners/legal-innovation-zone-logo.png';?>" alt="Legal Innovation Zone"></a>
            <a href="https://www.ryerson.ca/svz/projects/vesta/" target="_blank"><img class="social-venture" src="<?php echo get_template_directory_uri() . '/images/Partners/social-venture-zone-logo.png';?>" alt="Social Venture Zone"></a>
            <a href="https://www.unilever.ca/sustainable-living/" target="_blank"><img class="unilever" src="<?php echo get_template_directory_uri() . '/images/Partners/unilever_edited.png';?>" alt="Unilever Impact"></a>
        </div>
    </section>
  
    <section class="home-subscribe">
      <h2> Subscribe to get the latest updates</h2>
      

      <div class="subscribe-form-container">
          <?php dynamic_sidebar('sidebar-frontpg-subscribe'); ?>
        <!-- <form class="subscribe-form">
                <h3>Enter your Email address</h3>
                <input type="text" class="subscribe-email" placeholder="johndoe@gmail.com">
                <input type="submit" class="subscribe-button" value="Subscribe">
            </form> -->
        </div>
    </section>

</main>

<?php get_footer(); ?>

                        