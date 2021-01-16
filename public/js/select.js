$(function() {
    var select = $("#cur-languages");

    select.on("change", function() {
        $(".gallery-row").slideUp();

        if (select.val() == "Web") {
            $(".gallery-row").eq(0).slideDown();
        }
        else if (select.val() == "Python") {
            $(".gallery-row").eq(1).slideDown();
        }
        else if (select.val() == "C++") {
            $(".gallery-row").eq(2).slideDown();
        }
        else {
            $(".gallery-row").slideDown();
        }
    });
});