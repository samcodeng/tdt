
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
        $('.top').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
        $('.top').removeClass("sticky");
    }
});
 