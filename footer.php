<?php
wp_footer();
?>
<!-- scripts will load into this wp_footer() -->
<div class="footer">
    <div class="footer-inner-container">
        <div class="upper-footer">
            <div class="footer-logo"></div>
            <div class="footer-nav"><?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>  </div>
        </div>

        <div class="footer-subscribe">
        <form class="subscribe-form">
            <label> subscribe to get the latest updates about Vesta</p>
            <input type="text" class="subscribe-email" placeholder="johndoe@gmail.com">
            <input type="submit" class="subscribe-button" value=" Subscribe">
        </form>
        </div>
    </div>

    <div class="lower-footer">
        <div class="footer-nav-2"></div>
        <div class="socials-footer">
            <img classs="twitter" src="<?php echo get_template_directory_uri() . '/images/Icons/IconTwitter.svg';?>">
            <img classs="facebook" src="<?php echo get_template_directory_uri() . '/images/Icons/IconFacebook.svg';?>">
            <img classs="instagram" src="<?php echo get_template_directory_uri() . '/images/Icons/IconInstagram.svg';?>">
            <img classs="linkedin" src="<?php echo get_template_directory_uri() . '/images/Icons/IconLinkedIn.svg';?>">
        </div>
    </div>

</div>


    

</body>
</html>