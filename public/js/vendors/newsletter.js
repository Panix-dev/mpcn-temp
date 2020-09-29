$(document).ready(function(){
    
    (function($) {
        "use strict";

    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate footer newsletter form
    $(function() {
        $('.footer-form .subscribe_form').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: "Email Required!"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    headers: {
                        Accept: "application/json",
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    },
                    data: $(form).serialize(),
                    url:"/newsletter",
                    success: function(data) {
                        console.log(data);
                        $('.footer-form .subscribe_form :input').attr('disabled', 'disabled');
                        $('.footer-form .subscribe_form').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('.footer-form #success').text(data.message);
                            $('.footer-form #success').fadeIn();
                        })
                    },
                    error: function(data) {
                        console.log(data);
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('.footer-form #error').text(data.message);
                            $('.footer-form #error').fadeIn()
                        })
                    }
                })
            }
        })
    });

    // validate blog side newsletter form
    $(function() {
        $('#sidebarNewsletter').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: "Email Required!"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    headers: {
                        Accept: "application/json",
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    },
                    data: $(form).serialize(),
                    url:"/newsletter",
                    success: function(data) {
                        $('#sidebarNewsletter :input').attr('disabled', 'disabled');
                        $('#sidebarNewsletter').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#sidebarNewsletter #success').text(data.message);
                            $('#sidebarNewsletter #success').fadeIn();
                        })
                    },
                    error: function(data) {
                        console.log(data);
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#sidebarNewsletter #error').text(data.message);
                            $('#sidebarNewsletter #error').fadeIn()
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})