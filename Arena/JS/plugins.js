$(document).ready(function () {
    'use strict';
    $(".Active1").click(function () {
        $(".active2 , .active3 , .active4").hide(1000);
        $(".active1").slideToggle(1000);
    });
    
    $(".Active2").click(function () {
        $(".active1 , .active3 , .active4").hide(1000);
        $(".active2").slideToggle(1000);
    });
    
    $(".Active3").click(function () {
        $(".active1 , .active2 , .active4").hide(1000);
        $(".active3").slideToggle(1000);
    });
    
    $(".Active4").click(function () {
        $(".active1 , .active3 , .active2").hide(1000);
        $(".active4").slideToggle(1000);
    });
    
    if($(".active2 ul li select option").val()== 1)
        {
            $("#place1").slideDown(1000);
        }
    
    
});

