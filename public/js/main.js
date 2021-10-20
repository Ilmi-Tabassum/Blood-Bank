$(document).ready(function(){
    var isMenuOpen = false;

    $("#hamburger").click(function () {
        if (isMenuOpen == false) {
            $(".menu").css({
                "display": "block",
                "position": "absolute",
                "width": "100%",
                "left": "0",
                "top": "76px",
                "height": "auto",
                "padding": "10px"
            });
            $(".menu ul").css({
                "display" : "block"
            })
            isMenuOpen = true;
        }else{
            $(".menu").removeAttr('style');
            $(".menu ul").removeAttr('style');
            isMenuOpen = false;
        }
    })
});