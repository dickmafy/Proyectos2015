<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BERTHA EXPERTA EN CASA Seguridad y confianza a su servicio</title>
    <style type="text/css">
        @import url("estilos.css");
    </style>
    <?php include( "librerias.php"); ?>
    <script src="../js/moment.js"></script>
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/validarKeyDown.js"></script>
    <script src="../js/date.js"></script>
    <script src="../js/math.min.js"></script>

    <script>
		moment().zone(-5);
        var now = moment();
		//////alert(now);
    </script>

    <style type="text/css">
.error {
       color: #D8000C;
       background-color: #FFBABA;
       //background-image: url('error.png');
        font-size: 75%;
}
    </style>




    <script type="text/javascript">
$(document).ready(function(){

$("#sueldo").attr('maxlength','7');
$('#sueldo').validarKeyDown(' 0123456789.');


 $("select[name=mes_ini]").change(function(){
       getDiasPorMesFechaInicio();


    });//select FECHA INICIO

 $("select[name=mes_fi]").change(function(){
            getDiasPorMesFechaFin();
        });//se

  $("select[name=anio_ini]").change(function(){
            getDiasPorMesFechaInicio();

        });//select FECHA INICIO

 $("select[name=anio_fi]").change(function(){
            getDiasPorMesFechaFin();
        });//se



});//fin JQUERY


function  getDiasPorMesFechaInicio(){
        var diaInicio=$("#dia_ini");
            var mesInicial = $( "#mes_ini" ).val();
            mesInicial = math.eval(mesInicial+"-1");
            var anioInicial = $( "#anio_ini" ).val();
            console.log("mesInicial:" + math.eval(mesInicial+"+1"));
            console.log("anioInicial:" + anioInicial);

            var diasDelMes = Date.getDaysInMonth( anioInicial,mesInicial) ;
            console.log("DIAS TOTALES FECHA INICIO : " + diasDelMes );
            $('#dia_ini').empty();
            for (var i = 1; i <= diasDelMes; i++) {
                  $('#dia_ini').append('<option value="' + i+ '">' +i+ '</option>');
            };

        }


        function  getDiasPorMesFechaFin(){
            var diaFinal=$("#dia_fi");
            var mesFinal = $( "#mes_fi" ).val();
            mesFinal = math.eval(mesFinal+"-1");
            var anioFinal = $( "#anio_fi" ).val();
            console.log("mesFinal:" + math.eval(mesFinal+"+1"));
            console.log("anioFinal:" + anioFinal);
            //parametro : getDaysInMonth (ANIO,MES)
            var diasDelMes = Date.getDaysInMonth( anioFinal,mesFinal) ;
            console.log("DIAS TOTALES FECHA INICIO : " + diasDelMes );
            //LLENAMOS EL COMBO DE DIA -FECHA FINAL
             $('#dia_fi').empty();
            for (var i = 1; i <= diasDelMes; i++) {
                  $('#dia_fi').append('<option value="' + i+ '">' +i+ '</option>');
            };
        }

 function getFechaInicial(){
             day1 = document.getElementById('dia_ini').value;
            month1 = document.getElementById('mes_ini').value;
            year1 = document.getElementById('anio_ini').value;
                if(day1 == '' || month1 == '' || year1 == ''){
                    return false
                }
                fechaInicial= [day1, month1, year1].join('/');
           return fechaInicial;
            }

            function getFechaFinal(){
             day2 = document.getElementById('dia_fi').value;
            month2 = document.getElementById('mes_fi').value;
            year2 = document.getElementById('anio_fi').value;
                if(day2 == '' || month2 == '' || year2 == ''){
                    return false
                                     }
                fechaFinal = [day2, month2, year2].join('/');
            return fechaFinal;
            }

 function validarFechaMayorMenor()
        {

             day1 = document.getElementById('dia_ini').value;
            month1 = document.getElementById('mes_ini').value;
            year1 = document.getElementById('anio_ini').value;
            if(day1 == '' || month1 == '' || year1 == ''){
                return false
            }

            day2 = document.getElementById('dia_fi').value;
            month2 = document.getElementById('mes_fi').value;
            year2 = document.getElementById('anio_fi').value;
            if(day2 == '' || month2 == '' || year2 == ''){
                return false
            }



        var resultado;
        var fechaInicial= getFechaInicial();
        var fechaFinal=getFechaFinal();

       console.log("FECHA INICIAL " + fechaInicial);
       console.log("FECHA FINAL " + fechaFinal);

            valuesStart=fechaInicial.split("/");
            valuesEnd=fechaFinal.split("/");

            // Verificamos que la fecha no sea posterior a la actual
            var dateStart=new Date(valuesStart[2],(valuesStart[1]-1),valuesStart[0]);
            var dateEnd=new Date(valuesEnd[2],(valuesEnd[1]-1),valuesEnd[0]);
            if(dateStart>dateEnd)
            {
                //esta mal
                resultado= 0;
            }else{
                //esta correcto
            resultado =  1;
            }


        if(resultado) {
            $("#error_mensaje").hide();
            console.log(" Correcto F inicial " +fechaInicial+ " es MENOR o IGUAL a F Final "+fechaFinal);
       }else{
            $("#error_mensaje").show();
            $("#error_mensaje").text("Incorrecto : La Fecha Inicial  "+fechaInicial+" NO puede ser superior a la Fecha Final "+fechaFinal);
            //$("#anio_ini").find('option:[name="''"]').attr("selected", true);
            $("#anio_ini").val('').change();

            console.log("Incorrecto : La Fecha Inicial  "+fechaInicial+" NO puede ser superior a la Fecha. Final "+fechaFinal);
        }


        }


        function sueldo_diario(sueldo) {

            console.info("calculando Sueldo Diario ..");
            console.info("validando mayor menor fecha..");
            validarFechaMayorMenor();

            diario = sueldo / 30;
            liqui = sueldo / 720;
            sueldo_d.value = diario.toFixed(5); //SUELDO DIARIO                 id=sueldo_d
            dia_l.value = liqui.toFixed(5); //DIA LIQUIDABLE                id=dia_l

        //MONTO por despido anticipado
            if (document.getElementById('despido').checked) {
                monto.value = (diario * 15).toFixed(5);
            }

            //f_i = document.getElementById('f_inicio').value;
            //f_f = document.getElementById('f_final').value;

            day1 = document.getElementById('dia_ini').value;
            month1 = document.getElementById('mes_ini').value;
            year1 = document.getElementById('anio_ini').value;
            if(day1 == '' || month1 == '' || year1 == ''){
                return false
            }

            day2 = document.getElementById('dia_fi').value;
            month2 = document.getElementById('mes_fi').value;
            year2 = document.getElementById('anio_fi').value;
            if(day2 == '' || month2 == '' || year2 == ''){
                return false
            }
            f1= [day1, month1, year1].join('/');
            f2 = [day2, month2, year2].join('/');

            if(f_i == '' && f_f == ''){
                return false
            } else{
                calcular_dias();
            }
        }

        function calcular_dias() {

            console.info("calculando calcular_dias...");
            console.info("validando mayor menor fecha..");
            validarFechaMayorMenor();
            //f1 = document.getElementById('f_inicio').value;
            //f2 = document.getElementById('f_final').value;

            day1 = document.getElementById('dia_ini').value;
            month1 = document.getElementById('mes_ini').value;
            year1 = document.getElementById('anio_ini').value;
            if(day1 == '' || month1 == '' || year1 == ''){
                return false
                                 }

            day2 = document.getElementById('dia_fi').value;
            month2 = document.getElementById('mes_fi').value;
            year2 = document.getElementById('anio_fi').value;
            if(day2 == '' || month2 == '' || year2 == ''){
                return false
                                 }
            f1= [day1, month1, year1].join('/');
            f2 = [day2, month2, year2].join('/');

            var aFecha1 = f1.split('/');
            var aFecha2 = f2.split('/');
            anios = aFecha2[2] - aFecha1[2];
            meses = aFecha2[1] - aFecha1[1];
            //dias = aFecha2[0] - aFecha1[0];

         //   fFecha1 = document.getElementById('f_inicio').value;
        //  fFecha2 = document.getElementById('f_final').value;
            fFecha1= [day1, month1, year1].join('/');
            fFecha2 = [day2, month2, year2].join('/');

            var fFecha1 = Date.UTC(aFecha1[2],aFecha1[1]-1,aFecha1[0]);
            var fFecha2 = Date.UTC(aFecha2[2],aFecha2[1]-1,aFecha2[0]);
            var dif = fFecha2 - fFecha1;
            var dias = Math.floor(dif / (1000 * 60 * 60 * 24));

            //if(dias>360 && anios==0){ dias = 360;}
            year  = (aFecha2[2] - aFecha1[2]) * 360;
            month = (aFecha2[1] - aFecha1[1]) * 30;
            day  = (aFecha2[0] - aFecha1[0]);
            totalDays = (year+month+day);
            //alert('TOTAL DIAS: '+ totalDays );
            dias = totalDays;

            if (anios >= 1) {
                            var d = 360;
                            dias_trabajo = (((meses * 30) + (d + dias)) * (anios)) + 1;

                            //meses3 para la grati
                            f1= [01,01, year2].join('/');
                            f2 = [day2, month2, year2].join('/');
                            var a = moment(f2, "DD-MM-YYYY");
                            var b = moment(f1, "DD-MM-YYYY");
                            meses3 = a.diff(b, 'months');
                            //alert('meses ultimo anio: '+ meses3 );
                            document.getElementById("meses_trabajados2").innerHTML = 'Meses Ultimo Año(Sin Contar fecha inicio) : '+ meses3;

                    } else {
                        dias_trabajo = ((meses * 30) + dias) * (anios + 1);
                        document.getElementById("meses_trabajados2").innerHTML = 'Meses Ultimo año(Sin Contar fecha inicio) : '+ meses;
                    }




            n_dias.value = (dias); //DIAS TRABAJADOS              id=n_dias

        //PASO PERIODO DE PRUEBA?
            var a = moment(f2, "DD-MM-YYYY");
            var b = moment(f1, "DD-MM-YYYY");
            meses2 = a.diff(b, 'months');


            if (meses2 >= 3) {
                document.getElementById('prueba').value = 'Si';
            } else {
                document.getElementById('prueba').value = 'No';
            }
            if (anios < 1) {meses3 = meses2; }

            calcular_cts();
            calcular_vacaciones(meses2);
            calcular_gratificacion(meses3, aFecha2[0]);
            calcular_liquidacion();
        }
        //CTS
        function calcular_cts() {
             console.info("calculando calcular_cts...");
            console.info("validando mayor menor fecha..");
            validarFechaMayorMenor();

                dia_liquidable = document.getElementById('dia_l').value;
                dias_trabajo = document.getElementById('n_dias').value;
                console.info("calculando calcular_cts.> dia_liquidable " + dia_liquidable);
                 console.info("calculando calcular_cts.> dias_trabajo " + dias_trabajo);
                if (dias_trabajo >= 30) {
                    temp = dias_trabajo * dia_liquidable;
                    document.getElementById("cts").value = temp.toFixed(2);
                } else {
                    document.getElementById("cts").value = 0;
                }
            }
        //VACACIONES
        function calcular_vacaciones(meses_trabajo) {
            console.info("calculando calcular_vacaciones...");
            console.info("validando mayor menor fecha..");
            validarFechaMayorMenor();

                dia_liquidable = document.getElementById('dia_l').value;
                dias_trabajo = document.getElementById('n_dias').value;
                //var dia_i = document.getElementById('f_inicio').value;
                //var dia_f = document.getElementById('f_final').value;

                day1 = document.getElementById('dia_ini').value;
                month1 = document.getElementById('mes_ini').value;
                year1 = document.getElementById('anio_ini').value;
                if(day1 == '' || month1 == '' || year1 == ''){
                    return false
                }

                day2 = document.getElementById('dia_fi').value;
                month2 = document.getElementById('mes_fi').value;
                year2 = document.getElementById('anio_fi').value;
                if(day2 == '' || month2 == '' || year2 == ''){
                    return false
                }
                dia_i= [day1, month1, year1].join('/');
                dia_f = [day2, month2, year2].join('/');

                dia_inicial = dia_i.split("/");
                dia_final = dia_f.split("/");

                dias = dia_final[0] - dia_inicial[0];
                n_anios = (dia_final[2] - dia_inicial[2]) ;

                //alert(">1>n_anios :" + n_anios   +   "  >1> dias_trabajo   " +  dias_trabajo);
                if(n_anios==0){
                    n_anios=1;
                    //2014-2014 = 0 ENTONCES 1  -OK
                    //2015-2014 = 1                        -OK
                    //1/1/2016-1/1/2014 = 2          -OK

                     if (dias_trabajo >= 30) {
                    //temp2 = (meses_trabajo * 30 + dias) * dia_liquidable;
                    temp2 = (dias_trabajo * dia_liquidable)* n_anios;
                    document.getElementById("vacaciones").value = temp2.toFixed(2);
                    } else {
                        document.getElementById("vacaciones").value = 0;
                    }

                }else if(n_anios>0){
                    f1= [01,01, year2].join('/');
                    f2 = [day2, month2, year2].join('/');
                    var aFecha1 = f1.split('/');
                    var aFecha2 = f2.split('/');
                    year  = (aFecha2[2] - aFecha1[2]) * 360;
                    month = (aFecha2[1] - aFecha1[1]) * 30;
                    day  = (aFecha2[0] - aFecha1[0]);
                    dias_trabajo = (year+month+day);
                    //alert('dias ultimo anio: '+ dias_trabajo );
                                                    //dias trabajados del ultmo año
                                                  document.getElementById('n_dias2').value = dias_trabajo;
                                                    //alert("Dias trabajados de mas de 1 año : " + dias_trabajo);
                                                temp2 = (dias_trabajo * dia_liquidable)* n_anios;
                                                 document.getElementById("vacaciones").value = temp2.toFixed(2);
          }

                ////alert('numero de anios: '+ n_anios);

            }

        //GRATIFICACION
        function calcular_gratificacion(meses, dia) {

            console.info("calculando calcular_gratificacion...");
            console.info("validando mayor menor fecha..");
            validarFechaMayorMenor();


                dias_trabajo = document.getElementById('n_dias').value;
                if (dias_trabajo >= 30) {
                    //var f_i = document.getElementById('f_inicio').value;
                    //var f_f = document.getElementById('f_final').value;
                    day1 = document.getElementById('dia_ini').value;
                    month1 = document.getElementById('mes_ini').value;
                    year1 = document.getElementById('anio_ini').value;
                    if(day1 == '' || month1 == '' || year1 == ''){
                        return false
                    }

                    day2 = document.getElementById('dia_fi').value;
                    month2 = document.getElementById('mes_fi').value;
                    year2 = document.getElementById('anio_fi').value;
                    if(day2 == '' || month2 == '' || year2 == ''){
                        return false
                    }
                    f_i= [day1, month1, year1].join('/');
                    f_f = [day2, month2, year2].join('/');
                    fi = f_i.split("/"); //array de la fecha inicial
                    ff = f_f.split("/"); //array de la fecha final

                        var mes=0
                        //DIEGO AÑADIDO -SABADO
                        if (anios >= 1) {
                            mes= meses3;
                        }else{
                            mes = meses;
                        }

                        //alert("MES GRATI: " + mes);
                        var grati = 0;

                    if(ff[1] <= 7){         //PRIMER SEMESTRE
                        //alert('hasta julio');
                        if(ff[1] <= 7){
                            //quincena de julio
                            //alert('antes de 15 julio, SE APLICA GRATI');
                            sueldo = document.getElementById('sueldo').value;
                            grati = (sueldo/12)*mes;
                        }
                        if(ff[0] > 15 && ff[1] == 7){
                            //despues de quincena de julio
                            //alert('despues de 15 julio, NO SE APLICA GRATI');
                            grati = 0;
                        }
                    }else if(fi[1] >= 7){  //SEGUNDO SEMESTRE

                        //alert('despues mes de julio');
                        if(ff[1] <= 12){    //mes hasta diciembre
                            if(ff[0] < 15 && ff[1] <= 12){
                                //quincena de diciembre
                                //alert('antes de 15 diciembre, SE APLICA GRATI');
                                sueldo = document.getElementById('sueldo').value;
                                grati = (sueldo/12)*mes;
                            }else if(ff[0] == 15 && ff[1] == 12){
                                //15 de diciembre se consindera 1 mes completo
                                sueldo = document.getElementById('sueldo').value;
                                grati = (sueldo/12)*(mes+1);
                                //alert('quincena de diciembre, SE APLICA GRATI');
                            }
                            if(ff[0] > 15 && ff[1] == 12){
                                //despues de quincena de diciembre
                                //alert('despues de 15 diciembre. NO SE APLICA GRATI');
                                grati = 0;
                            }
                        }
                    } else if(ff[1] > 7 && fi[1] < 7){      //ENTRE 2 SEMESTRES
                        //alert('fecha inicia antes de julio y final despues de julio');
                        if(ff[0] > 15 && ff[1] == 12){
                            //despues de quincena de diciembre
                            //alert('despues de 15 diciembre. NO SE APLICA GRATI');
                            grati = 0;
                        }else {
                            //hasta quincena de diciembre
                            //alert('antes de 15 diciembre, SE APLICA GRATI');
                            var finale = moment(f_f, "DD-MM-YYYY");
                            var julio = moment("01/07/"+year2, "DD-MM-YYYY");
                            mes_2 = ((finale.diff(julio, 'months')));   //cantidad de meses a partir del 15 julio

                            if(ff[0] == 15 && ff[1] == 12){ // si llega hasta el 15 de diciembre si se considera ese mes
                                //alert('15 de diciembre');
                                mes = (mes_2+1);
                            }
                            else {mes = (mes_2);};
                            ////alert('Meses a partir de julio: '+mes);

                            sueldo = document.getElementById('sueldo').value;

                                //DIEGO AÑADIDO SABADO
                              //  mes = meses3;//meses del año actual

                            grati = (sueldo/12)*mes;
                        }
                        //document.getElementById("grati").innerHTML = 'Grati primer semestre: '+ mes;
                    }



                    document.getElementById("gratificacion").value = grati.toFixed(2);
                } else {
                    //alert('menos de 3 meses de trabajo, NO APLICA GRATI');
                    document.getElementById("gratificacion").value = 0;
                }
                document.getElementById("meses_trabajados").innerHTML = 'Meses totales trabajados: '+ mes;
            }

        //DESPIDO ANTICIPADO
        function calcular_monto(anticipado, sueldo_diario) {
                if (anticipado == 1) {
                    document.getElementById("monto").value = 0;
                } else {
                    sueldo = document.getElementById('sueldo').value;
                    sueldo_diario = sueldo / 30;
                    document.getElementById("monto").value = (sueldo_diario * 15).toFixed(2);
                }
                calcular_liquidacion();
            }
        //LIQUIDACION
        function calcular_liquidacion() {
            cts = parseInt(document.getElementById('cts').value);
            vacaciones = parseInt(document.getElementById('vacaciones').value);
            gratificacion = parseInt(document.getElementById('gratificacion').value);
            monto = parseInt(document.getElementById('monto').value);
            liquid = (cts + vacaciones + gratificacion + monto);
            document.getElementById('liquidacion').value = liquid;

        }
    </script>

    <body>
        <?php $menu="mninguno" ; include( "cabecera.php"); ?>
        <div id="cabecera">
            <img src="../imagenes/cabliquidacion.jpg" width="957" height="210" />
        </div>
        <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="210" align="center" valign="top">&nbsp;</td>
    </tr>
    <tr>
        <td height="700" align="center" valign="top">

            <table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="950" height="74" align="left" valign="middle" class="textoverdeenorme">Liquidación</td>
                </tr>
                <tr>
                    <td height="470" align="center" valign="top">

                        <table width="940" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="485" align="left" valign="top">
                                    <div align="justify" class="textoplomogrande">
                                        Entérate de cómo calcular tu liquidación. Además puedes informarte sobre tus derechos. Completa los campos sombreados en <span class="textoverdegrande">ROSADO</span>.</div>
                                    <br />
                                    <br />
                                    <table width="685" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="46" colspan="2" align="center" valign="top" class="textoverdegrande">
                                                <div class="error mensajes" id="error_mensaje"></div>
                                                LIQUIDACIÓN PARA TRABAJADORES DEL HOGAR
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="46" colspan="2" align="center" valign="top" class="textoplomogrande">
                                                <div align="justify">Calcula tu liquidación en línea o
                                                    <a href="liquidacion_final.xlsx" target="_blank" class="linkcelestechico">
                                                        <strong>DESCARGA EL FORMATO EN EXCEL</strong>
                                                    </a>.
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="46" colspan="2" align="left" valign="top" class="textoverdegrande">
                                                SUELDO POR TRABAJO DOMÉSTICO
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="348" height="20" align="left" valign="middle" bgcolor="#FF9DCD" class="textoplomogrande">
                                                &nbsp;&nbsp;Sueldo Mensual
                                            </td>
                                            <td width="337" align="left" valign="middle" bgcolor="#FF9DCD" class="textoplomogrande">
                                                S/
                                                <input class="cajatexto" type="text" id="sueldo" onChange="sueldo_diario(this.value)" autofocus tabindex="1" size="40">
                                            </td>
                                        </tr>
                                        <!--Ocultar Columna-->
                                        <tr  style="display:none;">
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;Sueldo Diario</td>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">S/
                                                <input class="cajatexto" type="text" id="sueldo_d" value="0" valign="middle" size="40" maxlength="50" readonly />
                                            </td>
                                        </tr>
                                        <!--Ocultar Columna-->
                                        <tr  style="display:none;">
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;Dia Liquidable</td>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">S/
                                                <input class="cajatexto" readonly type="text" id="dia_l" value="0" readonly tabindex="3" size="40" maxlength="50">
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table width="685" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="46" colspan="2" align="left" valign="top" class="textoverdegrande">
                                                FECHAS DE INICIO Y FIN DEL TRABAJADOR DOMESTICO
                                            </td>
                                        </tr>
										<tr>
                                            <td width="325" height="20" align="left" valign="middle" bgcolor="#FF9DCD" class="textoplomogrande">
												&nbsp;&nbsp;Fecha de inicio
											</td>
                                            <td align="left" valign="middle" bgcolor="#FF9DCD" class="textoplomogrande">

												<select name="dia_ini" class="lista" id="dia_ini" tabindex="4" onChange="calcular_dias()">
													<option value="">Día</option>
													<? for($d=1;$d<=31;$d++){
														echo '<option value="'.$d.'">'.$d.'</option>';
													}
													?>
												</select>
												<select name="mes_ini" class="lista" id="mes_ini" tabindex="5" onChange="calcular_dias()">
													<option value="">Mes</option>
													<? for($m=1;$m<=12;$m++){
														echo '<option value="'.$m.'">'.$m.'</option>';
													}
													?>
												</select>
												<select name="anio_ini" class="lista" id="anio_ini" tabindex="6" onChange="calcular_dias()">
													<option value="">Año</option>
													<? $max_anio = date("Y") + 10;
													for($a=$max_anio;$a>=1980;$a--){
														echo '<option value="'.$a.'">'.$a.'</option>';
													}
													?>
												</select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="325" height="20" align="left" valign="middle" bgcolor="#FF9DCD" class="textoplomogrande">
												&nbsp;&nbsp;Fecha de fin
											</td>
											<td align="left" valign="middle" bgcolor="#FF9DCD" class="textoplomogrande">
												<select name="dia_fi" class="lista" id="dia_fi" tabindex="4" onChange="calcular_dias()">
													<option value="">Día</option>
													<? for($d=1;$d<=31;$d++){
														echo '<option value="'.$d.'">'.$d.'</option>';
													}
													?>
												</select>
												<select name="mes_fi" class="lista" id="mes_fi" tabindex="5" onChange="calcular_dias()">
													<option value="">Mes</option>
													<? for($m=1;$m<=12;$m++){
														echo '<option value="'.$m.'">'.$m.'</option>';
													}
													?>
												</select>
												<select name="anio_fi" class="lista" id="anio_fi" tabindex="6" onChange="calcular_dias()">
													<option value="">Año</option>
													<? for($a=$max_anio;$a>=1980;$a--){
														echo '<option value="'.$a.'">'.$a.'</option>';
													}
													?>
												</select>

                                            </td>
                                        </tr>
                                        <tr style="display:none;">
                                            <td width="325" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;Dias trabajados
											</td>
                                            <td>
                                                <input class="cajatexto" readonly type="text" id="n_dias" size="40" value="0" readonly>
												<div id="meses_trabajados"></div>
                                            </td>
                                        </tr>
                                         <tr style="display:none;">
                                            <td width="325" height="20" align="left" valign="middle" class="textoplomogrande">
                                                &nbsp;&nbsp;Dias trabajados del ultimo año
                                            </td>
                                            <td>
                                                <input class="cajatexto" readonly type="text" id="n_dias2" size="40" value="0" readonly>
                                                <div id="meses_trabajados2"></div>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table width="685" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="46" colspan="2" align="left" valign="top" class="textoverdegrande">
                                                BENEFICIOS LABORALES PARA TRABAJADORES DEL HOGAR
                                            </td>
                                        </tr>
										<tr>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;CTS
											</td>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">S/.
                                                <input class="cajatexto" readonly type="text" id="cts" value="0" size="40" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;Vacaciones
											</td>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">S/.
                                                <input class="cajatexto" readonly type="text" id="vacaciones" value="0" size="40" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;Gratificaciones
											</td>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">S/.
                                                <input class="cajatexto" readonly type="text" id="gratificacion" value="0" size="40" readonly>
												<div id="grati"></div>
                                            </td>
                                        </tr>
									</table>
                                    <br>
                                    <table width="685" border="0" align="center" cellpadding="0" cellspacing="0" style="display:none;">
                                        <tr>
                                            <td height="46" colspan="2" align="left" valign="top" class="textoverdegrande">
                                                INDEMNIZACION POR DESPIDO INTEMPESTIVO
                                            </td>
                                        </tr>
										<tr>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;Paso el periodo de prueba
											</td>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<input class="cajatexto" type="text" size="40" id="prueba" value="0" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="415" height="20" align="left" valign="middle" bgcolor="#FF9DCD" class="textoplomogrande">
												&nbsp;&nbsp;Aviso anticipado (15 dias)
											</td>
                                            <td width="415" align="left" valign="middle" bgcolor="#FF9DCD" class="textoplomogrande">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<input class="cajatexto" readonly type="radio" name="aviso" value="1" onClick="calcular_monto(1,sueldo_d.value)" checked>Si
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<input class="cajatexto" readonly type="radio" name="aviso" id="despido" value="0" onClick="calcular_monto(0,sueldo_d.value)">No</td>
                                        </tr>
                                        <tr>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;Monto
											</td>
                                            <td  height="20" align="left" valign="middle" class="textoplomogrande">S/.
                                                <input class="cajatexto" type="text" size="40" id="monto" value="0" readonly>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>

                                    <table width="685" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="415" height="20" align="left" valign="middle" bgcolor="#FFFF33" class="textoplomogrande">
											<b>&nbsp;&nbsp;LIQUIDACION TOTAL</b></td>
                                            <td width="415" height="20" align="left" valign="middle" bgcolor="#FFFF33" class="textoplomogrande">S/.
                                                <input class="cajatexto" type="text" size="40" id="liquidacion" value="0" readonly>

                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</br>
</br>
<?php include("pie.php");?>

    </body>

</html>
