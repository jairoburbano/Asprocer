(function ( $ ) {
    jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
    $.validator.addMethod("customemail", 
                          function(value, element) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(value);
    }, 
                          "Tu correo no es válido"
                         );
    /**
     * Validación del formulario usando jQuery Validate
     */
    function validacionContacto() {
        var formulario = $('.form--contacto'),
            contenedor = $('.contact');
        $('<div class="message"></div>').appendTo('.form--contacto');
        formulario.validate({
            onkeyup: function (element, event) {
                if (event.which === 9 && this.elementValue(element) === "") {
                    return;
                } else {
                    this.element(element);
                }
            },
            rules: {
                username: "required",
                email: {
                    required: true,
                    customemail: true
                },
                message: {
                    required: true,
                    minlength: 20
                },
            },
            messages: {
                username: "Usa solo letras.",
                email: {
                    required: "Ingresa un e-mail válido.",
                    customemail: "Ingresa un e-mail válido.",
                    email: "Ingresa un e-mail válido."
                },
                message: {
                    required: "ingresa un mensaje válido",
                    minlength: "Ingresa al menos 20 caracteres."
                }
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");
                $('.loader').fadeIn();
                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        $('.loader').fadeOut();
                        formulario.find('.message').addClass('message__error').html('<p>Ocurrió un problema y el mensaje no fue enviado. Por favor intenta de nuevo.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('message__error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        $('.loader').fadeOut();
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<p>El mensaje fue enviado exitosamente. Gracias por contactarnos.</p>').slideDown().delay(3000).slideDown();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').addClass('message__error').html('<p>Ocurrió un problema y el mensaje no fue enviado. Por favor intenta de nuevo.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('message__error');
                        });
                        }
                    }
                } );
                return false;
            }
        });
    }
    function validacionNewsletter() {
        var formulario = $('.form-newsletter'),
            contenedor = $('.contact');
        $('<div class="message"></div>').appendTo('.form-newsletter');
        formulario.validate({
            onkeyup: function (element, event) {
                if (event.which === 9 && this.elementValue(element) === "") {
                    return;
                } else {
                    this.element(element);
                }
            },
            rules: {
                newsletter: {
                    required: true,
                    customemail: true
                },
            },
            messages: {
                newsletter: {
                    required: "Ingresa un e-mail válido.",
                    customemail: "Ingresa un e-mail válido.",
                    email: "Ingresa un e-mail válido."
                },
            },
            errorElement: 'span',
            errorClass: 'form__error',
            validClass: 'form__valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.group').removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.js-form'),
                    formURL = form.attr("action");

                var formData = new FormData($('.js-form')[0]);
                formData.append("action","contacto");

                $.ajax( {
                    url: ajax_contacto.ajaxurl,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    fail : function(result) {
                        formulario.find('.message').addClass('message__error').html('<p>Ocurrió un problema y el mensaje no fue enviado. Por favor intenta de nuevo.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('message__error');
                        });
                    },
                    success : function(result) {
                        var obj = result;
                        if (obj.exito === 'exito') {
                            formulario.find('.message').html('<p>El mensaje fue enviado exitosamente. Gracias por contactarnos.</p>').slideDown().delay(3000).slideDown();
                            formulario.find('.form__valid').removeClass('form__valid');
                            formulario[0].reset();
                        } else {
                            formulario.find('.message').addClass('message__error').html('<p>Ocurrió un problema y el mensaje no fue enviado. Por favor intenta de nuevo.</p>').slideDown().delay(3000).slideUp(function() {
                            $(this).removeClass('message__error');
                        });
                        }
                    }
                } );
                return false;
            }
        });
    }
    validacionContacto();
    validacionNewsletter();
})(jQuery);

