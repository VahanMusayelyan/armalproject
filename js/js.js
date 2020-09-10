$(document).ready(function () {
  
    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });

    $('ul li').click(function () {
        $(".dropdown").removeClass("open");
    })





    if (window.location.pathname == "/") {
        $(".se-pre-con").css({"display": "block"});
        $(".logo").css({"transform": "rotate(360deg)", "transition": "transform 2s"});
        $(".se-pre-con").fadeOut(2500);

    }else{
        $(".logo").css({"display": "none"});
        $(".se-pre-con").css({"display": "none"});
        
    }
    



});







