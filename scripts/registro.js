$(document).ready(function () {
    var aviso = document.getElementById("aviso");
    $('.message a').click(function(){
        aviso.innerHTML = "";
        $('form').animate({opacity: "toggle", height:"toggle"}, "slow");
     });
});
