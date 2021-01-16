$(function() {
    var progressSizes = [];
    $('.progress').each(function() {
        progressSizes.push($(this).width());
        $(this).width(0);
    });

    for (let i = 0; i < progressSizes.length; i++) {
        $('.progress').eq(i).animate({
            width : progressSizes[i]
        }, 4000, 'swing');
    }
});