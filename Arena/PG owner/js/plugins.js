$(document).ready(function () {
    
    $(".tb table tr td:last-of-type").click(function () {
       $(this).children().val("حظر");
       $(this).parent().css("background","rgb(255 , 0 , 0 , 0.5)");
   }) ;
    
   
});