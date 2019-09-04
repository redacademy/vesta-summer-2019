(function($) {
    console.log('Houston, we have a connection.')
    const $faqIcon = $('.toggle-answer')

    // Toggle FAQ
    $faqIcon.on('click', (e) => {
        console.log('this:', this)
        console.log($(e.target).siblings('div.faq-answer'))
        $(e.target).siblings('div.faq-answer').slideToggle(); 
    })

})(jQuery);