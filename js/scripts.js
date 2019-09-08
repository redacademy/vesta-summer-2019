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

    const $bookSessionBtn = $('.wpcf7-submit')
    const $personalMsg = $('.personal-msg')
    const $greyOverlayBookPg = $('.book-pg-dark-overlay')
    const $bookMsgBox = $('.info-session-confirm')
    const $closeBtn = $('.fa-times-circle')
    const bookForm = document.getElementById('wpcf7-f43-p32-o1')
    const $bookSuccessAlert = $('.wpcf7-response-output.wpcf7-display-none.wpcf7-mail-sent-ok.msg-overlay')
    const templateUrl = vestaVariables.templateUrl
    const homeUrl = vestaVariables.homeUrl
    const resourcesUrl = vestaVariables.resourcesUrl

    // $bookSuccessAlert.append('<i class="fas fa-times-circle"></i>') // append as first child x icon and email icon
    // append as second child, 

    bookForm.addEventListener( 'wpcf7mailsent', function( event ) {
        console.log(event)
        let $userEmail = $('#wpcf7-f43-p32-o1 .wpcf7-email').val()
        event.detail.apiResponse.message = '<i class="fas fa-times-circle"></i>' + 
         '<img src="' + templateUrl + '/images/icons/iconMessageSent.svg" >' +
         '<h1>Confirmed</h1>' +
         '<p>Thank you for booking an info session! <br>' +
         'We have sent a confirmation to your email at ' + $userEmail + '</p>' +
         '<a href="' + homeUrl + '" class="vesta-btn">Return to home</a>' +
         '<p class="alert-footer">Interested in Resources? <a href="' + resourcesUrl + '">Learn More</a></p>';
        // console.log(event.detail.apiResponse.message)
        $('.wpcf7-response-output').addClass('msg-overlay');
        ($greyOverlayBookPg).fadeIn();
        // $bookMsgBox.fadeIn()

    }, false );

    


    

    // // Open modal
    // $bookSessionBtn.on('click', (e) => {
    //     // e.preventDefault()
    //     $personalMsg.empty()
    //     let $userEmail = $('#wpcf7-f43-p32-o1 .wpcf7-email').val()
    //     $personalMsg.append(`<p>Thank you for booking an info session! <br>
    //     We have sent a confirmation to your email at ${$userEmail}</p>`);

    //     ($greyOverlayBookPg).fadeIn();
    //     ($bookMsgBox).fadeIn();
    // })

    
    // Close modal...
    function closeModal() {
        $bookSuccessAlert.hide()
        $greyOverlayBookPg.fadeOut()
    }

    $closeBtn.on('click', closeModal)
    $greyOverlayBookPg.on('click', closeModal)
    
    

})(jQuery);