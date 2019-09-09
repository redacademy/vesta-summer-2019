(function($) {
//      FAQ Page

    const $faqIcon = $('.toggle-answer')

    // Toggle FAQ - allow multiple open
    $faqIcon.on('click', (e) => {
        $(e.target).toggle()
        $(e.target).siblings('.toggle-answer').toggle()
        $(e.target).siblings('div.faq-answer').slideToggle(); 
    })


//      Book Info Session Page

    const $greyOverlayBookPg = $('.book-pg-dark-overlay')
    const $bookInfoWrapper = $('.book-info-session')
    const bookForm = document.getElementById('wpcf7-f43-p32-o1')
    const templateUrl = vestaVariables.templateUrl
    const homeUrl = vestaVariables.homeUrl
    const resourcesUrl = vestaVariables.resourcesUrl

    // Open modal on successful form submission
    bookForm.addEventListener( 'wpcf7mailsent', function( event ) {
        let $userEmail = $('#wpcf7-f43-p32-o1 .wpcf7-email').val()
        event.detail.apiResponse.message = '<i class="fas fa-times-circle"></i>' + 
         '<img src="' + templateUrl + '/images/icons/iconMessageSent.svg" >' +
         '<h1>Confirmed</h1>' +
         '<p>Thank you for booking an info session! <br>' +
         'We have sent a confirmation to your email at ' + $userEmail + '</p>' +
         '<a href="' + homeUrl + '" class="vesta-btn">Return to home</a>' +
         '<p class="alert-footer">Interested in Resources? <a href="' + resourcesUrl + '">Learn More</a></p>';
        $('.wpcf7-mail-sent-ok').addClass('msg-overlay');
        ($greyOverlayBookPg).fadeIn();

    }, false );

    
    // Close modal...
    function closeModal() {
        $('.wpcf7-mail-sent-ok').hide()
        $greyOverlayBookPg.fadeOut()
    }

    $bookInfoWrapper.on('click', '.fa-times-circle', closeModal)
    $greyOverlayBookPg.on('click', closeModal)
    
    

})(jQuery);