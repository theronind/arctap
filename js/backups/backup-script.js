// Element Supports Attribute
// feature test for element and attribute support
function elementSupportsAttribute(element, attribute) {
    var test = document.createElement(element);
    if (attribute in test) {
        return true;
    } else {
        return false;
    }
}


$(document).ready(function () {


    // ==========================================================================
    // Placeholder Attribute Fallback

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


    // ==========================================================================
    // Work Sort
    // http://net.tutsplus.com/tutorials/javascript-ajax/creating-a-filterable-portfolio-with-jquery

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


    // ==========================================================================
    // jQuery Form Validate
    // https://github.com/jzaefferer/jquery-validation

    jQuery.validator.setDefaults({
        debug: false,
        submitHandler: function(form) {
                            var options = {
                                    type: 'POST',
                                    clearForm: true,
                                    resetForm: true,
                                    success:    function () {
                                                    $('.success').css({'display': 'block'}).fadeIn(1000).delay(5000).fadeOut(1000);
                                                }
                                };
                            $(form).ajaxSubmit(options);
                        }
    });//end setDefaults

    jQuery.validator.addMethod( "phoneUS", function (phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || phone_number.length > 9 && phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
    }, "Please specify a valid phone number");


    //jquery validation
    $('#hireForm').validate({

        // custom rules
        rules: {
            name: {
                required: true
            },
            company: {
                required: false,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                phoneUS: true
            },
            budget: {
                required: true
            },
            message: {
                required: true,
                minlength: 10
            }
        },

        // custom messages
        messages: {
            name: {
                    required: "<b class=\"ss-standard ss-alert\"></b> What can we call you by?",
                    minlength:"your name must contain more than 3 characters"
            },
            company: {
                    minlength:"Your company has less than two letters?"
            },
            email: {
                    required: "<b class=\"ss-standard ss-alert\"></b> We need your email address",
                    email: "Ya' need use the correct syntax (i.e. username@emailprovider.domain)"
            },
            phone: {
                    required: "<b class=\"ss-standard ss-alert\"></b> Oh no! you didn't provide a US phone syntax."
            },
            budget: {
                    required: "<b class=\"ss-standard ss-alert\"></b> Oh no! We don't know your budget."
            },
            message: {
                    required: "<b class=\"ss-standard ss-alert\"></b> We need to know why you're contacting us",
                    minlength: "your message must contain more than 10 characters in length"
            }
        }
    });//end validate
});