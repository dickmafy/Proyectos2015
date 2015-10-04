<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>BERTHA EXPERTA EN CASA Seguridad y confianza a su servicio</title>
        <link href="estilos.css" rel="stylesheet">
        <link href="../css/jquery-ui.min.css" rel="stylesheet">
        <style type="text/css">
            .error {
                   color: #D8000C;
                   background-color: #FFBABA;
                   /*background-image: url('error.png');*/
                    font-size: 75%;
            }
        </style>
    </head>
    <body>
        <?php $menu = "mninguno"; include("cabecera.php"); ?>
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
                                        Entérate de cómo calcular tu liquidación. Además puedes informarte sobre tus beneficios laborales.<br /> Completa los campos sombreados en <span class="textoverdegrande">ROSADO</span>.</div>
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
                                                <div align="justify">Calcula tu liquidación en línea.
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
                                                <b>S/.</b> <input class="cajatexto" type="text" id="sueldo" autofocus size="20" maxlength="8" placeholder="Digite el sueldo">
                                            </td>
                                        </tr>
                                        <!--Ocultar Columna-->
                                        <tr style="display:none;">
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;Sueldo Diario</td>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">S/
                                                <input class="cajatexto" type="text" id="sueldo_d" value="0" valign="middle" size="40" maxlength="50" readonly />
                                            </td>
                                        </tr>
                                        <!--Ocultar Columna-->
                                        <tr style="display:none;">
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;Día Liquidable</td>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">S/
                                                <input class="cajatexto" readonly type="text" id="dia_l" value="0" readonly size="40" maxlength="50">
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table width="685" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="46" colspan="3" align="left" valign="top" class="textoverdegrande">
                                                FECHAS DE INICIO Y FIN DEL TRABAJADOR DOMESTICO<br />
												<span Class="textoplomochico"> Los beneficios laborales del trabajador del hogar se calculan a partir del primer mes de trabajo, contabilizados desde el primer día de labores.</span>
                                            </td>
                                        </tr>
										<tr>
                                            <td width="325" height="20" align="left" valign="middle" bgcolor="#FF9DCD" class="textoplomogrande">
												&nbsp;&nbsp;Fecha de inicio
											</td>
                                            <td colspan="2" align="left" valign="middle" bgcolor="#FF9DCD" class="textoplomogrande">
                                                <input type="text" id="fecha_ini" readonly='true' class="cajatexto" placeholder="DD/MM/AAAA">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="325" height="20" align="left" valign="middle" bgcolor="#FF9DCD" class="textoplomogrande">
												&nbsp;&nbsp;Fecha de fin
											</td>
											<td align="left" valign="middle" bgcolor="#FF9DCD" class="textoplomogrande">
												<input type="text" id="fecha_fin" readonly='true' class="cajatexto" placeholder="DD/MM/AAAA">
                                            </td>
                                            <td bgcolor="#FF9DCD">
                                                <button id="btnCalcular" onclick="calcular()">Calcular</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" bgcolor="#FF9DCD"></td>
                                        </tr>
                                        <tr style="display:none;">
                                            <td width="325" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;Días trabajados
											</td>
                                            <td colspan="2">
                                                <input class="cajatexto" readonly type="text" id="n_dias" size="40" value="0" readonly>
												<div id="meses_trabajados"></div>
                                            </td>
                                        </tr>
                                         <tr style="display:none;">
                                            <td width="325" height="20" align="left" valign="middle" class="textoplomogrande">
                                                &nbsp;&nbsp;Días trabajados del último año
                                            </td>
                                            <td colspan="2">
                                                <input class="cajatexto" readonly type="text" id="n_dias2" size="40" value="0" readonly>
                                                <div id="meses_trabajados2"></div>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table width="685" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="46" colspan="2" align="left" valign="top" class="textoverdegrande">
                                                BENEFICIOS LABORALES PARA TRABAJADORES DEL HOGAR <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div id="beneficios"></div>
                                            </td>
                                        </tr>
										<tr>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;CTS <em>(acumulado)</em>
											</td>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">S/.
                                                <input class="cajatexto" readonly type="text" id="cts" value="0.00" size="40" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;Gratificaciones <em>(último semestre)</em>
											</td>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">S/.
                                                <input class="cajatexto" readonly type="text" id="gratificacion" value="0.00" size="40" readonly>
												<div id="grati"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">
												&nbsp;&nbsp;Vacaciones <em>(último periodo)</em>
											</td>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande">S/.
                                                <input class="cajatexto" readonly type="text" id="vacaciones" value="0.00" size="40" readonly>
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
												&nbsp;&nbsp;Aviso anticipado (15 días)
											</td>
                                            <td width="415" align="left" valign="middle" bgcolor="#FF9DCD" class="textoplomogrande">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<input class="cajatexto" readonly type="radio" name="aviso" value="1" onClick="" checked>Si
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<input class="cajatexto" readonly type="radio" name="aviso" id="despido" value="0" onClick="">No</td>
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
											<b>&nbsp;&nbsp;LIQUIDACIÓN TOTAL</b></td>
                                            <td width="415" height="20" align="left" valign="middle" bgcolor="#FFFF33" class="textoplomogrande">S/.
                                                <input class="cajatexto" type="text" size="40" id="liquidacion" value="0.00" readonly>
                                            </td>
                                        </tr>
                                    </table><br /> <table width="685" border="0" align="center" cellpadding="0" cellspacing="0"><tr>
                                            <td width="415" height="20" align="left" valign="middle" class="textoplomogrande"><button id="btnborrar" onclick="borrar()">Limpiar datos</button></td>
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
<?php include( "librerias.php"); ?>
        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/jquery-ui.min.js"></script>
        <script src="../js/jquery.ui.datepicker-es.js"></script>
        <script>
            $(document).ready(function(){
                $('#sueldo').val('');                
                $('#fecha_ini').val('');
                $('#fecha_fin').val('');
            });

            var sueldo = 0;
            var fecha_ini = '';
            var fecha_fin = '';
            var year_ini = '';
            var year_fin = '';
            var mdSueldo = 0; // medio sueldo
            var mdSueldoDia = 0; // medio sueldo diario

            /*-- Datepickers - para fecha de hoy, inicio y fin --*/
            $.datepicker.regional['es'];
            $( "#fecha_ini" ).datepicker({
                inline: true,
                changeMonth: true,
                changeYear: true,
                yearRange: "c-30:c",
                maxDate: 0,
				onSelect: function(date) {
						fecha_tempo = $( "#fecha_ini" ).val().split("/");
						fecha_tempo = new Date(fecha_tempo[2], parseInt(fecha_tempo[1]), parseInt(fecha_tempo[0]) - 1 );
						$('#fecha_fin').datepicker('option','minDate', new Date(fecha_tempo)); 	
			}
            });
            $( "#fecha_fin" ).datepicker({
                inline: true,
                changeMonth: true,
                changeYear: true,
                yearRange: "c-30:c+5"
            });
            /*-- FIN Datepickers --*/

            /*-- Calcular beneficios laborales --*/
            $('#btnCalcular').button({ icons: { secondary: "ui-icon-calculator" } });
			$('#btnborrar').button({ icons: { secondary: "ui-icon-arrowrefresh-1-n" } });
            function borrar(){
				 location.reload();
			}
			function calcular(){
            	console.clear();
            	$('#cts').val('0.00');
            	$('#vacaciones').val('0.00');
            	$('#gratificacion').val('0.00');
            	$('#liquidacion').val('0.00');
                var vsld = verificarSueldo();
                if(vsld == true){
                    var vfch = verificarFechas();
                    if(vfch == true){
                        // Primero contamos cuántos años trabajó la persona
                        year_ini = fecha_ini.getFullYear();
                        year_fin = fecha_fin.getFullYear();
                        diffYears = year_fin - year_ini;
                        console.log("Se va a evaluar " + (diffYears+1) + " año(s)!!!");
                        mdSueldo = sueldo / 2;
                        console.log("Medio sueldo: " + mdSueldo);
                        mdSueldoDia = mdSueldo / 30;
                        console.log("Medio sueldo diario: " + mdSueldoDia);
                        //borramos cualquier data que hubiera en el div de beneficios
                        $('#beneficios').empty();
                        recursivo(fecha_ini, fecha_fin);
                    }
                    else{
                        console.log("Hay un error con las fechas!");
                    }
                }
                else{
                    console.log("Hay un error con el sueldo!");
                }
            }
            function recursivo(inicio, fin){
                var curr_year = inicio.getFullYear();
                var diffYears = year_fin - curr_year;
                var cts = 0
                var vacas = 0;
                var gratiJul = 0;
                var gratiDic = 0;
                console.log("Calculando beneficios para el año: " + curr_year);
                console.log("Fecha de inicio: " + inicio);
                if(diffYears > 0){
                    fin = new Date('12/30/' + curr_year);
                    console.log("Fecha de fin: " + fin);
                    cts = calcularCTS(inicio, fin);
                    //vacas = calcularVacas(inicio);
                    gratiJul = calcularGratiJul(inicio, fin);
                    gratiDic = calcularGratiDic(inicio, fin);
                }
                else{                    
                    console.log("Fecha de fin: " + fin);
                    cts = calcularCTS(inicio, fin);
                    //vacas = calcularVacas(inicio);
                    gratiJul = calcularGratiJul(inicio, fin);
                    gratiDic = calcularGratiDic(inicio, fin);
                }
                var fecha_vacas = new Date((fecha_ini.getMonth() + 1)  + '/' + fecha_ini.getDate() + '/' + curr_year);
                $('#beneficios').append('<p class="textoplomogrande">' +
                    '<span class="textoverdegrande">Año: ' + curr_year + '</span><br>' +
                    '<br>CTS: <b>' + cts + '</b> <em>(Retenido)</em>' +
                    '<br>Gratificación Julio: <b>' + gratiJul + '</b>' +
                    '<br>Gratificación Diciembre: <b>' + gratiDic + '</b>' +
                    calcularVacas(fecha_vacas) +
                    '</p><hr>');
                	// acumulado de cts
                    var sum_cts = $('#cts').val();
                    sum_cts = parseFloat(sum_cts);
                    sum_cts += parseFloat(cts);
                    sum_cts = sum_cts.toFixed(2);
                    $('#cts').val(sum_cts);
                    // gratificación final
                    var grati = 0;
                    if(gratiJul > 0){
                    	$('#gratificacion').val(gratiJul);
                    	grati = gratiJul;
                    }
                    if(gratiDic > 0){
                    	$('#gratificacion').val(gratiDic);
                    	grati = gratiDic;
                    }
                    vacas = $('#vacaciones').val();
                    // liquidación total
                    var liqui = parseFloat(sum_cts) + parseFloat(vacas) + parseFloat(grati);
                    liqui = liqui.toFixed(2);
                    $('#liquidacion').val(liqui);
                if(year_fin - curr_year > 0){
                    // sigue un año más
                    console.log("Siguiente año...");
                    var next_year = curr_year + 1;
                    if(next_year == year_fin){
                        // si el siguiente año es el final
                        inicio = new Date('01/01/' + next_year);
                        fin = new Date(fecha_fin);
                        // repetimos el proceso para este año
                        recursivo(inicio, fin);
                    }
                    else{
                        // tomamos el año completo
                        inicio = new Date('01/01/' + next_year)
                        fin = new Date('12/30/' + next_year)
                        // repetimos el proceso para el siguiente año
                        recursivo(inicio, fin);
                    }
                }
            }
            function calcularCTS(inicio, fin){
                // meses trabajados
                var flag = 0;
                var meses = dateDiffInMonths(inicio, fin);
              					
                var dias = diasResto(inicio, fin, flag);
				if(meses>=11 && dias==30)
					dias=0;
				
				console.log("direfencia: " + dateDiffInDays(inicio, fin));
                console.log("Meses trabajados: " + meses);
                console.log("Días trabajados CTS: " + dias);
                var cts = (mdSueldo * meses / 12) + (mdSueldoDia * dias / 12);
                cts = cts.toFixed(2);
				
                return cts;
            }
            function calcularVacas(inicio){
            	var flag = 1;
            	var vacas = 0;
            	var fin = '';
                //var vacas = calcularCTS(inicio, fin);
                var oneYearLater = new Date((inicio.getFullYear() + 1) ,(inicio.getMonth()),inicio.getDate()-1);
                var diffDays = dateDiffInDays(oneYearLater, fecha_fin);
				
                if(diffDays >= 0){
                	// las vacas son de un año
                	vacas = mdSueldo;
                	fin = oneYearLater;
                }
                else{
                	// calculamos las vacas según el tiempo que falta
                	fin = fecha_fin;
                	var meses = dateDiffInMonths(inicio, fin);
	                var dias = diasResto(inicio, fin, flag);
					console.log("Días trabajados Vacas: " + dias);
					console.log("meses trabajados Vacas: " + meses);
	                vacas = (mdSueldo * meses / 12) + (mdSueldoDia * dias / 12);
                }
				
                vacas = vacas.toFixed(2);
				fmes=inicio.getMonth()
				finicio= inicio.getFullYear();
                inicio = inicio.getDate() + '/' + (inicio.getMonth() + 1)  + '/' + inicio.getFullYear();
				if (fin.getMonth()  == fmes && fin.getFullYear() != finicio){
					if(fin.getDate() == '1' && fin.getMonth() > 1){
						fin = new Date(fin.getFullYear(), fin.getMonth() - 1, 0);
					}
					else if(fin.getDate() == '1' && fin.getMonth() == 1){ 
						fin = new Date(fin.getFullYear() - 1, 0, 0);
					
					}
					else{
						fin = new Date(fin.getFullYear(), fin.getMonth(), fin.getDate());
					}
				}
                fin = (fin.getDate()) + '/' + (fin.getMonth() + 1)  + '/' + fin.getFullYear();
                var texto = '<br>Vacaciones del periodo: ' + inicio + ' - ' + fin + ': <b>' + vacas + '</b>';
                if(vacas < 0){
                	vacas = '0.00';
                	texto = '<br><em>Sin vacaciones para este periodo</em>';
                }else{
                	$('#vacaciones').val(vacas);
                }
                return texto;
            }
            function calcularGratiJul(inicio, fin){
            	var flag = 0;
                var grati = 0;
                var meses = 0;
                var dias = 0;
                // meses trabajado de enero a junio
                mes_ini = inicio.getMonth() + 1;
                mes_fin = fin.getMonth() + 1;
                if(mes_ini <= 6){
                    // si tiene grati de julio
                    if(mes_fin > 6){
                        // usamos como final el 06 de junio del mismo año
                        fin = new Date('06/30/' + inicio.getFullYear());
                        // SINO, usamos como final la fecha del parámetro
                    }
                    meses = dateDiffInMonths(inicio, fin);
                    var dias = diasResto(inicio, fin, flag);
					if(meses==6)
					 dias =0;
                    console.log("Meses trabajados de Enero a Junio: " + meses);
                    console.log("Días trabajados de Enero a Junio: " + dias);
					//if(dias<30 && flag==0)
						//grati = 0;
					//else
						grati = (mdSueldo * meses / 6) + (mdSueldoDia * dias / 6);
                }
                return grati.toFixed(2);
            }
            function calcularGratiDic(inicio, fin){
                // meses trabajado de julio a diciembre
                var flag = 1;
                var grati = 0;
                var meses = 0;
                var dias = 0;
                // meses trabajado de julio a diciembre
                mes_ini = inicio.getMonth() + 1;
                mes_fin = fin.getMonth() + 1;
                if(mes_fin >= 7){
                    // si tiene grati de diciembre
                    if(mes_ini < 7){
                        // usamos como inicio el 01 de julio del mismo año
                        inicio = new Date('07/01/' + inicio.getFullYear());
                        // SINO, usamos como inicio la fecha del parámetro
                    }
                    meses = dateDiffInMonths(inicio, fin);
                    var dias = diasResto(inicio, fin, flag);
					if(meses==6)
					 dias =0;
                    console.log("Meses trabajados de Julio a Diciembre: " + meses);
                    console.log("Días trabajados de Julio a Diciembre: " + dias);
					//if(dias<30 && flag==0)
					//	grati = 0;
					//else
                    grati = (mdSueldo * meses / 6) + (mdSueldoDia * dias / 6);
                }
                return grati.toFixed(2);
            }
            /*-- FIN Calcular --*/

            /*-- Verificar sueldo --*/
            function verificarSueldo(){
                sueldo = $.trim($('#sueldo').val()); 
                if(sueldo == ''){
                    alert('Debe ingresar el Sueldo Mensual');
                    $('#sueldo').focus();
                    return false;
                }
                if(jQuery.isNumeric(sueldo) == false){
                    alert('El Sueldo Mensual no tiene el formato correcto');
                    $('#sueldo').focus();
                    return false;
                }
                return true;
            }
            // Validamos el input del sueldo con formato de moneda
            $("#sueldo").on("keyup", function(){
                var valid = /^\d{0,5}(\.\d{0,2})?$/.test(this.value),
                    val = this.value;
                
                if(!valid){
                    console.log("Sueldo incorrecto!");
                    this.value = val.substring(0, val.length - 1);
                }
            });
            /*-- FIN Verificar sueldo --*/

            /*-- Verificar fechas correctas --*/
            var _MS_PER_DAY = 1000 * 60 * 60 * 24;
            var _MS_PER_MONTH = 1000 * 60 * 60 * 24 * 30;

            // a and b are javascript Date objects
            function dateDiffInDays(a, b) {
              // Discard the time and time-zone information.
              var utc1 = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate());
              var utc2 = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate());
		
              return Math.floor((utc2 - utc1) / _MS_PER_DAY) + 1 ;
            }
            function dateDiffInMonths(a, b) {
              // Discard the time and time-zone information.
			  var d = new Date(a.getFullYear(), a.getMonth(), a.getDate() - 1);
			  var extra=0;
			  var d2 = new Date(a.getFullYear(), 2, 0);
			  d2=d2.getDate();
			  var tempo = dateDiffInDays(a, b);
			  if(tempo>=d2 && a.getMonth() <= 1 && b.getMonth() >= 1)
				extra=1;
              var utc1 = Date.UTC(d.getFullYear(), d.getMonth(), d.getDate() + (d2 * extra));
              var utc2 = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate());

              return (Math.floor((utc2 - utc1) / _MS_PER_MONTH) + extra);
            }
            function diasResto(inicio, fin, flag){
            	var dias = 0;
				var d = new Date(fin.getFullYear(), fin.getMonth() + 1, 0);
				d=d.getDate();
				dias = fin.getDate() - inicio.getDate() + 1;

				if (dias < 0){
					var d2 = new Date(inicio.getFullYear(), inicio.getMonth() + 1, 0);
					d2=d2.getDate();
					dias= d2 - inicio.getDate() + fin.getDate();
					}
				dias = dias % d;
				var ultimodia = new Date((fin.getFullYear()) ,(fin.getMonth() + 1),0);
				if(ultimodia.getDate() >29)
					dias=0;
            	return dias;
            }
            function verificarFechas(){
                fecha_ini = $('#fecha_ini').val();
                fecha_ini = fecha_ini.split("/");
                fecha_ini = fecha_ini[1] + '/' + fecha_ini[0] + '/' + fecha_ini[2];
                fecha_fin = $('#fecha_fin').val();
                fecha_fin = fecha_fin.split("/");
                fecha_fin = fecha_fin[1] + '/' + fecha_fin[0] + '/' + fecha_fin[2];
                if(fecha_ini == ''){
                    alert('Debe ingresar una Fecha de Inicio');
                    $('#fecha_ini').focus();
                    return false;
                }
                if(fecha_fin == ''){
                    alert('Debe ingresar una Fecha de Fin');
                    $('#fecha_fin').focus();
                    return false;
                }
                fecha_ini = new Date(fecha_ini);
                fecha_fin = new Date(fecha_fin);
                var diffDays = dateDiffInDays(fecha_ini, fecha_fin);
                if(diffDays <= 0){
                    alert('La fecha de Inicio debe ser anterior a la fecha de Fin');
                    return false;
                }
                return true;
            }
            /*-- FIN Verificar fechas --*/
        </script>
    
    </body>
</html>