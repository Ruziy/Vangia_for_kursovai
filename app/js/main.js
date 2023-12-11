$(function(){
    var mixer = mixitup('.recipes__inner',{
        load:{
            filter:'.body-care'
        }
    });  
    $('.testimonials__slider').slick({
        slidesToShow:2,
        slidesToScroll:1,
        dots:true,
        arrows:true,
        prevArrow: '<img class="testimonials__sliderprev-img" src="images/icons/left__arrow.svg">',
        nextArrow: '<img class="testimonials__slidernext-img" src="images/icons/right__arrow.svg">',
        responsive:[
            {
                breakpoint:1300,
                settings:{
                    slidesToShow:1,
                    slidesToScroll:1,
                }
            },
        ]
    });
    $('.burger').on('click',function(){
        $('.burger').toggleClass('active');
        $('.header__bar').toggleClass('header__bar-open');
        $('.header__logo').toggleClass('header__logo-burger');
        $('.header__cart').toggleClass('header__cart-burger');
        $('.header__items').toggleClass('header__items-burger');
    })
})
