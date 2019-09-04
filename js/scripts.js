(function($) {
    const $faqIcon = $('.toggle-answer')

    // Toggle FAQ - allow multiple open
    $faqIcon.on('click', (e) => {
        $(e.target).siblings('div.faq-answer').slideToggle(); 
    })

})(jQuery);