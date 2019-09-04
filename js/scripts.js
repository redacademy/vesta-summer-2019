(function($) {
    const $faqIcon = $('.toggle-answer')
    const $plusIcon = $('.fa-plus')
    const $minusIcon = $('.fa-minus')

    // Toggle FAQ - allow multiple open
    $faqIcon.on('click', (e) => {
        $(e.target).toggle()
        $(e.target).siblings('.toggle-answer').toggle()
        $(e.target).siblings('div.faq-answer').slideToggle(); 
    })

})(jQuery);