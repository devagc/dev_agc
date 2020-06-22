$(document).ready(function(){
    //nav
    $('#header .nav .btn_menu').click(function(){
        var $nav = $('#header .nav ul');
        if($nav.hasClass('active')) {
            $('#header .nav ul').slideUp(300);
            $nav.removeClass('active');
        }
        else {
            $('#header .nav ul').slideDown(300);
            $nav.addClass('active');
        }
        
    });
});