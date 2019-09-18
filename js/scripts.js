(function($) {
    //  Exit Site Button
    const $exitButton = $('.exit-button')
    let $windowHeight = $(window).height()
    let $footerLocation = $('footer').offset().top
    let $footPosition = $('footer').offset().top - 50


    function setButtonLocation() {
        if($footerLocation < $windowHeight) {
            $exitButton.css('top', $footPosition)
        }
        else {
            $exitButton.css('top', $windowHeight - 50)
        }
    }
    setButtonLocation()
    
    $(window).resize(function() {
         $windowHeight = $(window).height()
         if($exitButton.css('position') === 'fixed'){
            setButtonLocation()
            }
         else {
            $exitButton.css('top', $footPosition)
         }
    })


    $(document).on('scroll', function() {
        $footPosition = $('footer').offset().top - 50
        let $btnPosition = $exitButton.offset().top
        let $scrollPos = $(document).scrollTop() + $windowHeight

        if($exitButton.css('position') === 'fixed') {
            if($btnPosition >= $footPosition) {
                $exitButton.css({'position': 'absolute',
                    'top': $footPosition})
            }
        }
        else if($exitButton.css('position') === 'absolute') {
            if($scrollPos - 50 <= $btnPosition) {
                $exitButton.css({'position': 'fixed',
                'top': $windowHeight - 50})
            }
    }
    })


//  SHAPES WRAPPER
    let $bodHeight = $('body').height()
    console.log('doc height', $bodHeight)
    const $shapeWrapper = $('.all-shapes-wrapper')
    $shapeWrapper.css('minHeight', '100%')
    console.log('wrap height', $shapeWrapper.height())
    console.log('initial wrap height', $shapeWrapper.height())
    
    if($bodHeight <= $shapeWrapper.height()) {
        console.log('doc is smaller')
        $shapeWrapper.css('maxHeight', '400px')
        console.log('wrap height', $shapeWrapper.height())
    }
    else if($bodHeight > $shapeWrapper.height()) {
        console.log('doc is bigger')
        $shapeWrapper.css('maxHeight', $bodHeight)
        console.log('wrap height', $shapeWrapper.height())
        $bodHeight = $(document).height()
        console.log('new doc height', $bodHeight)
    }





    //      Front Page FLICKITY
    $('.customer-stories-carousel').flickity({
        // options
        cellAlign: 'center',
        contain: true,
        wrapAround: true
    });


//      RESOURCES Page

    const $workplaceCatHeader = $('.resource-workplace-header')
    const $communityCatHeader = $('.resource-community-header')
    const $workplaceResources = $('.workplace-resources')
    const $communityResources = $('.community-resources')

    $communityCatHeader.on('click', function(e) {
        $workplaceCatHeader.removeClass('resource-header-selected')
        $communityCatHeader.addClass('resource-header-selected')
        $workplaceResources.hide()
        $communityResources.show()

    }) 
    
    $workplaceCatHeader.on('click', function(e) {
        $communityCatHeader.removeClass('resource-header-selected')
        $workplaceCatHeader.addClass('resource-header-selected')
        $communityResources.hide()
        $workplaceResources.show()
    }) 




//      FAQ Page

    const $faqIcon = $('.toggle-answer')

    // Toggle FAQ - allow multiple open
    $faqIcon.on('click', (e) => {
        $(e.target).toggle()
        $(e.target).siblings('.toggle-answer').toggle()
        $(e.target).parent().siblings('div.faq-answer').slideToggle(); 
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
            <div class="confirmed-msg-container">
             <img src="${templateUrl}/images/icons/iconMessageSent.svg" class="icon-message-sent" >
             <h1>Confirmed</h1>
             <p class="confirmed-msg">Thank you for booking an info session! <br>
             We have sent a confirmation to your email at ${$userEmail} </p>
             <a href="${homeUrl}" class="vesta-btn">Return to home</a>
             <p class="alert-footer">Interested in Resources? <a href="${resourcesUrl}" class="overlay-btn">Learn More</a></p>
             </div>`;
            $('.wpcf7-mail-sent-ok').addClass('msg-overlay');
            ($greyOverlayBookPg).fadeIn();
    
        }, false );
    }
    

    // OPEN modal on successful contact form submission
    if(contactForm) {
        contactForm.addEventListener( 'wpcf7mailsent', function( event ) {
            event.detail.apiResponse.message = `<i class="fas fa-times-circle"></i>
            <div class="confirmed-msg-container">            
            <img src="${templateUrl}/images/icons/iconMessageSent.svg" class="icon-message-sent" >
            <p class="confirmed-msg">Thank you for sending us a message. <br>
            A representative will get back to you within 48 hours!</p>
            <a href="${homeUrl}" class="vesta-btn">Return to home</a>
            </div>`;
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
    





    




    //What We Offer Page Tab
        $('.steps-container ul').hide();
        $('.steps-container ul:first-child').show();
        $('.employee-employer-nav li:first').addClass('tab-active');

        // Change tab class and display content
        $('.employee-employer-nav a').on('click', function(event){
            event.preventDefault();
        $('.employee-employer-nav li').removeClass('tab-active');
        $(this).parent().addClass('tab-active');
        $('.steps-container ul').hide();
        $($(this).attr('href')).show();
        });
    

})(jQuery);