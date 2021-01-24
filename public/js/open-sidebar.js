// TODO: open sidebar function
$(function() {
    $('.mbl-sidebar-btn').on('click', function() {
        if ($('.sidebar').css("marginLeft") == "-275px") {
            $('.sidebar').animate({
                "margin-left" : "0px"
            }, 300);
        }
        else {
            $('.sidebar').animate({
                "margin-left" : "-275px"
            }, 300);
        }
    });
})