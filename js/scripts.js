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
    const $bookSuccessAlert = $('#wpcf7-f43-p32-o1 .wpcf7-mail-sent-ok')

    // $bookSuccessAlert.append('<i class="fas fa-times-circle"></i>') // append as first child x icon and email icon
    // append as second child, 

    bookForm.addEventListener( 'wpcf7mailsent', function( event ) {
        console.log(event)
        event.detail.apiResponse.message = '<i class="fas fa-times-circle"></i>'
        console.log(event.detail.apiResponse.message)
        // $('.wpcf7-response-output').addClass('msg-overlay info-session-confirm');
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
        $bookMsgBox.hide()
        $greyOverlayBookPg.fadeOut()
    }

    $closeBtn.on('click', closeModal)
    $greyOverlayBookPg.on('click', closeModal)
    
    

})(jQuery);