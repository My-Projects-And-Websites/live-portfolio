$(function() {
    var textInput = $("#text-input");
    var emailInput = $("#email-input");
    var msgInput = $("#msg-input");

    // Focus Ins
    textInput.on("focus", focusIn);
    emailInput.on("focus", focusIn);
    msgInput.on("focus", focusIn);

    // Focus Out
    textInput.on('blur', focusOut);
    emailInput.on('blur', focusOut);
    msgInput.on('blur', focusOut);

    function focusIn() {
        $(this).css(
            "border-color" , "#dcdcdc"
        )
    }

    function focusOut() {
        $(this).css(
            "border-color" , "#EE5757"
        );

        // general form validation after focus out
        if ($(this).val().trim() == "") {
            $(this).css("border-color", "#EE5757");
            $(this).siblings("small").slideDown();
        }
        else {
            $(this).css("border-color", "#dcdcdc");
            $(this).siblings("small").slideUp();
        }
    }

    $(".contact-form").on('submit', function(event) {
        // Name Validation
        if (textInput.val().trim() == "") {
            textInput.css("border-color", "#EE5757");
            textInput.siblings("small").slideDown();
            event.preventDefault();
        }

        // Email Validation
        if (emailInput.val().trim() == "") {
            emailInput.css("border-color", "#EE5757");
            emailInput.siblings("small").slideDown();
            event.preventDefault();
        }
        else {
            if (!isEmail(emailInput.val())) {
                emailInput.css("border-color", "#EE5757");
                emailInput.siblings("small").slideDown();
                event.preventDefault();
            }
        }

        // Message Validation
        if (msgInput.val().trim() == "") {
            msgInput.css("border-color", "#EE5757");
            msgInput.siblings("small").slideDown();
            event.preventDefault();
        }
    });
});

function isEmail(email) {
    if (email != null && email != undefined) {
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        return pattern.test(email);    
    }
    else {
        return false;
    }
}