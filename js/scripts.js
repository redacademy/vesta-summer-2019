(function($) {
//      Front Page FLICKITY
    $('.customer-stories-carousel').flickity({
        // options
        cellAlign: 'center',
        contain: true
    });




//      FAQ Page

    const $faqIcon = $('.toggle-answer')

    // Toggle FAQ - allow multiple open
    $faqIcon.on('click', (e) => {
        $(e.target).toggle()
        $(e.target).siblings('.toggle-answer').toggle()
        $(e.target).siblings('div.faq-answer').slideToggle(); 
    })

    

    // BOOK INFO SESSION & CONTACT US Pages

    // Book Info Session Variables
    const $greyOverlayBookPg = $('.book-pg-dark-overlay')
    const $bookInfoWrapper = $('.book-info-session ')
    const bookForm = document.querySelector('.book-info-session .wpcf7')
    
    // Global Vesta Variables
    const templateUrl = vestaVariables.templateUrl
    const homeUrl = vestaVariables.homeUrl
    const resourcesUrl = vestaVariables.resourcesUrl
    const $wpcf7Btn = $('.wpcf7-submit')

    // Contact Us Variables
    const $greyOverlayContactPg = $('.contact-pg-dark-overlay')
    const contactForm = document.querySelector('.contact-us-form .wpcf7')
    const $contactUsWrapper = $('.contact-us-form')



    // Remove overlay styling
    $wpcf7Btn.on('click', function() {
        $('.wpcf7-response-output').removeClass('msg-overlay');
    });

    // OPEN modal on successful book info form submission
    if(bookForm) {
        bookForm.addEventListener( 'wpcf7mailsent', function( event ) {
            let $userEmail = $('#wpcf7-f43-p32-o1 .wpcf7-email').val()
            event.detail.apiResponse.message = `<i class="fas fa-times-circle"></i>
             <img src="${templateUrl}/images/icons/iconMessageSent.svg" >
             <h1>Confirmed</h1>
             <p>Thank you for booking an info session! <br>
             We have sent a confirmation to your email at ${$userEmail} </p>
             <a href="${homeUrl}" class="vesta-btn">Return to home</a>
             <p class="alert-footer">Interested in Resources? <a href="${resourcesUrl}">Learn More</a></p>`;
            $('.wpcf7-mail-sent-ok').addClass('msg-overlay');
            ($greyOverlayBookPg).fadeIn();
    
        }, false );
    }
    

    // OPEN modal on successful contact form submission
    if(contactForm) {
        contactForm.addEventListener( 'wpcf7mailsent', function( event ) {
            event.detail.apiResponse.message = `<i class="fas fa-times-circle"></i>
            <img src="${templateUrl}/images/icons/iconMessageSent.svg" >
            <p>Thank you for sending us a message. <br>
            A representative will get back to you within 48 hours!</p>`;
            $('.wpcf7-mail-sent-ok').addClass('msg-overlay');
            ($greyOverlayContactPg).fadeIn();
    
        }, false );
    }
    
    
    // CLOSE modals (Booking and Contact Pg)
    function closeModal() {
        $('.wpcf7-mail-sent-ok').hide()
        $greyOverlayBookPg.fadeOut()
        $greyOverlayContactPg.fadeOut()
    }

    $bookInfoWrapper.on('click', '.fa-times-circle', closeModal)
    $greyOverlayBookPg.on('click', closeModal)

    $greyOverlayContactPg.on('click', closeModal)
    $contactUsWrapper.on('click', '.fa-times-circle', closeModal)
    





    
    

})(jQuery);