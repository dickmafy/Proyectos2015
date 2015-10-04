$(function () {
    var filterList = {
        init: function () {
            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixitup({
                targetSelector: '.portfolio',
                filterSelector: '.filter',
                effects: ['fade'],
                easing: 'snap',
                // call the hover effect
                onMixEnd: filterList.hoverEffect()
            });
        },
        hoverEffect: function () {
            // Simple parallax effect
            $('#portfoliolist .portfolio').hover(
                    function () {
                        $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                        $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                    },
                    function () {
                        $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                        $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                    }
            );
        }
    };
    // Run the show!
    filterList.init();
});



$(document).ready(function () {
 
    
    $("#telefono").keypress(function (e) {
        var tecla = document.all ? tecla = e.keyCode : tecla = e.which;
        return ((tecla > 47 && tecla < 58) || tecla == 46);
    });
    $("#EnviarForm").click(function () {
        var nombre = $("#nombre").val();
        var tlf = $("#telefono").val();
        var correo = $("#correo").val();
        var mensaje = $("#mensaje").val();
        if (nombre.length < 1) {
            alert("El nombre es obligatorio");
            return false;
        }
        if (tlf.length < 1) {
            alert("El telefono es obligatorio");
            return false;
        }
        if (correo.length < 1) {
            alert("El e-mail es obligatorio");
            return false;
        } else {
            var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
            if (filter.test(correo)) {
            } else {
                alert("El correo no es valido");
                return false;
            }
        }
        if (mensaje.length < 1) {
            alert("El mensaje es obligatorio");
            return false;
        }
        $.ajax({
            url: '../module/frmcontactenos1.php',
            type: 'POST',
            data: {
                nombre: nombre,
                tlf: tlf,
                correo: correo,
                mensaje: mensaje
            },
            datatype: 'html',
            beforeSend: function () {
                $("#dialog").dialog({
                    resizable: false,
                    modal: true,
                    autoOpen: true,
                    width: 350,
                    height: 120
                });
                $("#dialog #rpta").html("Enviando...");
            },
            success: function (html) {
                $("#dialog #rpta").html(html);
            }
        });
    });
});







            