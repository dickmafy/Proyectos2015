
$(document).ready(function () {

    console.log('READY ! ..... jquery 1.11');

    $("#telefono").keydown(function () {
        console.log("Handler for .keypress() called.");
        alert("Handler for .keypress() called.");
    });
    console.log('READY 2! ..... jquery 1.11');

    $().UItoTop({easingType: 'easeOutQuart'});

    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
    });


    $("#btn1").click(function () {
        $("p").append(" <b>Appended text</b>.");
    });
    $("#btn2").click(function () {
        $("ol").append("<li>Appended item</li>");
    });


    /*SPRITE*/
    $('#disenioweb').spriteOnHover();
    $('#hosting').spriteOnHover();
    $('#identidad').spriteOnHover({fps: 20});
    $('#fotografia').spriteOnHover({fps: 20});
    $('#impresos').spriteOnHover({fps: 30});
    $.scrollIt({
        topOffset: -60
    });

    $('.clients').find('img').mouseover(function () {
        this.src = this.src.replace('a.jpg', '.jpg');
    }).mouseout(function () {
        this.src = this.src.replace('.jpg', 'a.jpg');
    });




    $("#EnviarForm").click(function () {
        alert('ENVIANDO FORM.....');
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

