$('.faq-accordion__item').click(function () {
    $(this).toggleClass('accordion-active');
    $(this).find('p').toggleClass('accordion-active-text');
    $(this).find('span').toggleClass('accordion-active-before');
});


$('#accordionExample').click(function () {
    console.log(1);
});
