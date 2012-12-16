// feature test for element and attribute support
function elementSupportsAttribute(element, attribute) {
    var test = document.createElement(element);
    if (attribute in test) {
        return true;
    } else {
        return false;
    }
}

// Document.Ready
$(document).ready(function () {

    // http://flexslider.woothemes.com/
    $('.flexslider').flexslider({
        animation: "slide",
        directionNav: false
    });

    // input placeholder fallbacks
    if (!elementSupportsAttribute('input', 'placeholder')) {
        // input value insertion
        $('#name').val('*Name');
        $('#company').val('Company Name');
        $('#phone').val('Phone Number');
        $('#email').val('*Your Email Address');
        $('#website').val('http://');
        $('#message').val('*Give us a brief description of your project and target launch date, if you have one.');

        // focus state for inputs
        $('input.form-input').focus(function () {
            $(this).val('');
        });
    }

    // Work Sort
    // http://net.tutsplus.com/tutorials/javascript-ajax/creating-a-filterable-portfolio-with-jquery/
    $('#filter a').on('click', function () {
        $('ul#filter .current').removeClass('current');
        $(this).parent().addClass('current');

        var filterVal = $(this).find("span").text().toLowerCase().replace(' ', '-');

        if (filterVal == 'all') {
            $('ul#portfolio li.hidden').fadeIn('slow').removeClass('hidden');
        } else {
            $('ul#portfolio li').each(function () {
                if (!$(this).hasClass(filterVal)) {
                    $(this).fadeOut('normal').addClass('hidden');
                } else {
                    $(this).fadeIn('slow').removeClass('hidden');
                }
            });
        }
        return false;
    });

    // Hire Form
    // http://www.spruce.it/noise/simple-ajax-contact-form
    $('#hireForm input[type="submit"]').on('click', function () {
        var name       = $('#name').val(),
            company    = $('#company').val(),
            phone      = $('#phone').val(),
            email      = $('#email').val(),
            website    = $('#website').val(),
            budget     = $('#budget').val(),
            message    = $('#message').val(),
            dataString = "name=" + name + "&company=" + company + "&phone=" + phone + "&email=" + email + "&website=" + website + "&budget=" + budget + "&message=" + message;

        if (name === '') {
            $('#name').css({'background-color' : '#FAFFBD'});
            $('#name').on('click', function () {
                $(this).css({'background-color' : '#ffffff'});
            });
        } else if (email === '') {
            $('#email').css({'background-color' : '#FAFFBD'});
            $("#email").on('click', function () {
                $(this).css({'background-color' : '#ffffff'});
            });
        } else if (budget === 'DEFAULT') {
            $('#budget').css({'background-color' : '#FAFFBD'});
            $("#budget").on('click', function () {
                $(this).css({'background-color' : '#ffffff'});
            });
        } else if (message === '') {
            $('#message').css({'background-color' : '#FAFFBD'});
            $("#message").on('click', function () {
                $(this).css({'background-color' : '#ffffff'});
            });
        } else {
            $.ajax({
                type: "POST",
                url: "/hireMail.php",
                data: dataString,
                success: function () { $('.success').fadeIn(1000).delay(5000).fadeOut(1000); }
            });
        }
        return false;
    });

});