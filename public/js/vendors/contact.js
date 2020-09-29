$(document).ready(function(){
    
    (function($) {
        "use strict";

    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Your name is a required field",
                    minlength: "Your name must consist of at least 2 characters"
                },
                subject: {
                    required: "The subject is a required field",
                    minlength: "Your subject must consist of at least 4 characters"
                },
                number: {
                    required: "Your number is a required field",
                    minlength: "Your Number must consist of at least 5 characters"
                },
                email: {
                    required: "Your email is a required field"
                },
                message: {
                    required: "You have to write a message to send this form",
                    minlength: "The message you want to send is too small"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    headers: { 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content') },
                    data: $(form).serialize(),
                    url:"/contact",
                    success: function(data) {
                        console.log(data);
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success i').text(data.name);
                            $('#success b').text(data.email);
                            $('#success').fadeIn();
                        })
                    },
                    error: function(data) {
                        console.log(data);
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})