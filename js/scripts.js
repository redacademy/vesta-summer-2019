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

    const $bookSessionBtn = $('input.book-info-session')
    const $personalMsg = $('.personal-msg')
    const $greyOverlay = $('.book-pg-dark-overlay')
    const $bookMsgBox = $('.info-session-confirm')

    $bookSessionBtn.on('click', (e) => {
        e.preventDefault()
        let $userEmail = $('#book-session-email').val()
        $personalMsg.append(`<p>Thank you for booking an info session! <br>
        We have sent a confirmation to your email at ${$userEmail}</p>`);

        ($greyOverlay).fadeIn();
        ($bookMsgBox).fadeIn();



    })
    

})(jQuery);