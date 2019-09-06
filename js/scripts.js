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
    const $nameField = $('#book-session-user-name')
    const $personalMsg = $('.personal-msg')
    const $greyOverlayBookPg = $('.book-pg-dark-overlay')
    const $bookMsgBox = $('.info-session-confirm')

    // Open modal
    $bookSessionBtn.on('click', (e) => {
        // e.preventDefault()
        let $userEmail = $('#book-session-email').val()
        $personalMsg.append(`<p>Thank you for booking an info session! <br>
        We have sent a confirmation to your email at ${$userEmail}</p>`);

        ($greyOverlayBookPg).fadeIn();
        ($bookMsgBox).fadeIn();
    })

    
    // Close modal...
    function closeModal() {
        $bookMsgBox.hide()
        $greyOverlayBookPg.fadeOut()
    }

    // Close on icon click
    const $closeBtn = $('.fa-times-circle')
    $closeBtn.on('click', closeModal)

     // Close when user clicks outside of modal
    if($bookMsgBox.is(':hidden')) {
        console.log('box is none')
    }

     
        // $(window).on('click', (e) => {
        //     if($bookMsgBox.is(':hidden')) {
        //         // do nothing
        //     }
        //     else {
        //         closeModal();
        //     }

        //     // if(e.target !== $bookMsgBox) {
        //     //     console.log(e.target)
        //     //     closeModal();
        //     //  }
        // })
    
    

})(jQuery);