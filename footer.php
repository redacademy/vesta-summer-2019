<?php
wp_footer();
?>
<!-- scripts will load into this wp_footer() -->
<section class="footer">
    <div class="footer-inner-container">
        <div class="upper-footer">
            <div class="footer-logo"><img class="logo-black" src="<?php echo get_template_directory_uri(). '/images/Icons/Vesta_Horizontal_Black.png';?>">
                                     <img class="logo-letter" src="<?php echo get_template_directory_uri(). '/images/Icons/Vesta_LOGO_LETTERS.png';?>"></div>
            <div class="footer-nav"><?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>  </div>
        </div>

        <div class="footer-subscribe">
        <form class="subscribe-form">
            <label> Subscribe to get the latest updates about Vesta</p>
            <input type="text" class="subscribe-email" placeholder="johndoe@gmail.com">
            <input type="submit" class="subscribe-button" value=" Subscribe">
        </form>
        </div>
    </div>

    <div class="lower-footer">
        <div class="footer-nav-2"></div>
        <div class="socials-footer">
            <a href="https://twitter.com/vestasit" target="_blank"><img classs="twitter" src="<?php echo get_template_directory_uri() . '/images/Icons/IconTwitter.svg';?>" alt="Twitter Icon"></a>
            <a href="https://www.facebook.com/VestaSIT/" target="_blank"><img classs="facebook" src="<?php echo get_template_directory_uri() . '/images/Icons/IconFacebook.svg';?>" alt="Facebook Icon"></a>
            <a href="https://www.instagram.com/vesta.s.i.t/" target="_blank"><img classs="instagram" src="<?php echo get_template_directory_uri() . '/images/Icons/IconInstagram.svg';?>" alt="Instagram Icon"></a>
            <a href="https://www.linkedin.com/company/vesta-social-innovation-technologies/" target="_blank"><img classs="linkedin" src="<?php echo get_template_directory_uri() . '/images/Icons/IconLinkedIn.svg';?>" alt="LinkedIn Icon"></a>
        </div>
    </div>

</section>


    

</body>
</html>