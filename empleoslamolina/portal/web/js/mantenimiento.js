
validar_mante = function(tipo){
var status = false;
switch(tipo){
case "item":{

var numero = $.trim($("#cantidad").attr("value"));
var producto = $.trim($("#cboproducto option:selected").val());
if(numero.length>0){
	if(producto.length>0){				
		status = true;
		}else{
		status = false;
		alert("Seleccione un producto");
		}				
$("#fila_mensaje").remove();
}else{
status = false;
alert("Ingrese cantidad");
}


break;
}
}
return status;
}

makeTR_mante = function(tipo,n_trs){
	
var id_tr = "tr_"+tipo+"_"+(n_trs+1);		
var lnk = 	"<img src=\"../imagenes/x.png\"  border=\"0\" align=\"absmiddle\" />"+
			"<a class='linkverde' href=\"javascript: del_item_mante('"+id_tr+"','"+tipo+"');\">"+
			"Eliminar"+
			"</a>";
var lnk_ver = "<a href=\"javascript: show_finditem_popup('1','1');\">"+"Ver"+"</a>";
	  
var pos_fila = "impar";		  
if((n_trs+1)%2 == 0){ pos_fila = "par"; }
var attr_class = "row_data_list_"+pos_fila;

switch(tipo){
case "item":{
	var categoria 		= $("#categoria option:selected").text();
	var producto		= $("#cboproducto option:selected").text();		
	var direc_producto	= $("#cboproducto  option:selected").val();	
	var cantidad		= $("#cantidad").attr("value");

	
	var input_categoria	= "categoria"+(n_trs+1);
	var input_producto	= "cboproducto"+(n_trs+1);
	var input_cantidad 	= "cantidad"+(n_trs+1);
	var input_comentario= "comentario"+(n_trs+1);
			
	var tr = "<tr id=\""+id_tr+"\" class=\""+attr_class+"\">"+
			 "<td width='5%'>"+(n_trs+1)+"</td>"+
			 "<td width='10%'>"+cantidad+
			 "<input size=\"4\" type=\"hidden\" value=\""+cantidad+"\" id=\""+input_cantidad+"\" name=\""+input_cantidad+"\" /><input size=\"1\" type=\"hidden\" value=\""+categoria+"\" id=\""+input_categoria+"\" name=\""+input_categoria+"\" /></td>"+
			 "<td width='21%'>"+producto+
			 "<input size=\"2\" type=\"hidden\" value=\""+producto+"\" id=\""+input_producto+"\" name=\""+input_producto+"\" /></td>"+
			 "<td width='42%'><input type=\"text\" id=\""+input_comentario+"\" name=\""+input_comentario+"\" value=\"\" size=\"60\" class=\"cajabusqueda\"/></td>"+				 
			 "<td width='7%'><a id='thumb1' class='linkverde' href=\""+direc_producto+"\" onclick='return hs.expand(this)'>Ver</a></td>"+	 
			 "<td width='15%'>"+lnk+"</td>"+
			 "</tr>";
			break;
		}
		
	}
	return tr;
}

ini_mante = function(tipo){
	switch(tipo){
		case "item":{		
			$('#categoria')[0].selectedIndex = 0;
			$("#cboproducto option[value='']").attr('selected', 'selected');  
			$("#cantidad").attr("value","");			
			$("#categoria").focus();
			break;
		}
	}
}

getCampoToolTip_mante = function(tipo){
	switch(tipo){
		case "item":{
			return "#cantidad";
		}
	}
}

setIdsNamesInpus_mante = function(tipo,inputs){
	switch(tipo){
		case "item":{
			//alert(inputs.length);
			input_cate		= "cantidad"+(i+1);
			input_prod	 	= "categoria"+(i+1);
			input_cant 		= "cboproducto"+(i+1);
			input_come 		= "comentario"+(i+1);			
			$(inputs[0]).attr({id: input_cate,name: input_cate});
			$(inputs[1]).attr({id: input_prod,name: input_prod});
			$(inputs[2]).attr({id: input_cant,name: input_cant});
			$(inputs[3]).attr({id: input_come,name: input_come});			
			
			break;
		}
	}
}

add_item_mant = function(tipo){
	//alert("agregando item de item...");
	//alert(tipo);
	var RV = validar_mante(tipo);
	if(RV){
		//alert("ok");
		var tabla_listado = $("#tab_listado_"+tipo);
		var n_trs = $("tr",tabla_listado).length;

		//alert(n_trs);
		if(n_trs == 1){
			//si la tabla tiene una sola fila, es posible 
			//que sea la primera vez que se ingresa un registro
			//o que ya se haya ingresado mas registros y se hayan
			//eliminado quedando una fila nada mas.
			//asi que una forma de saber si debemos eliminar esta fila
			//es por el numero de celdas que tendra este tr
			//----------------------------------------------------
			var n_tds = $("tr:last td",tabla_listado).length;
			//alert(n_tds);
			if(n_tds == 1){
				$("tr",tabla_listado).remove();
				n_trs--;
			}
			//----------------------------------------------------
		}
		var tr = makeTR_mante(tipo,n_trs);
		//alert(tr);
		$("#tab_listado_"+tipo).append(tr);
		$("#trs_"+tipo).attr("value",n_trs+1);
		//INICIALIZANDO
		//-------------------------------------------
		ini_mante(tipo);
		//-------------------------------------------
		
	}
	else{
		//alert("error");
		var campo_tooltip = getCampoToolTip_mante(tipo);
		var offset = $(campo_tooltip).offset();
		
		var H_tooltip = $(".tip").height();
		var Y = (offset.top - H_tooltip-35)+"px";
		var X = (offset.left-30)+"px";
		$(".tip").css({"top": Y, "left": X});
		$(".tip .tipMid").html("Campo requerido");
		$(".tip").animate({"top": "+=20px", "opacity": "toggle"}, 300);
		
		$(campo_tooltip).focus();
		
		setTimeout("close_tooltip_mante()",2000);
		//$(".tip").show();
	}
}

close_tooltip_mante = function(){
	//alert("cerrando tooltip...");
	$(".tip").animate({"top": "+=20px", "opacity": "toggle"}, 300);
}

reestablecer_trs_mante = function(tipo){	
	//--------------------------------------------
		var trs = $("#tab_listado_"+tipo+" tr");
		var n_trs = trs.length;	

	for(i=0;i<(n_trs);i++){

		
		//REESTABLECIENDO ID	
		//---------------------------------------
		//	if (tipo=="condiciones_po"){
		//	$(trs[y]).attr("id","tr_"+tipo+"_"+(i+1));						
		//	}else{
			$(trs[i]).attr("id","tr_"+tipo+"_"+(i+1));		
		//	}
//		$("#tr_condiciones_po_"+[i]).attr("id","tr_"+tipo+"_"+(i+1));		
		
		//---------------------------------------
		//REESTABLECIENDO NRO
		//---------------------------------------
	//	if (tipo=="condiciones_po"){
	//		$("td:first",trs[y]).text(i+1);
	//	}else{
			$("td:first",trs[i]).text(i+1);
	///		}
		//---------------------------------------
		//REESTABLECIENDO HREF
		//---------------------------------------
		id_tr = "tr_"+tipo+"_"+(i+1);
		href = "javascript: del_item_mante('"+id_tr+"','"+tipo+"')";
		$("td:last a",trs[i]).attr("href",href);
		//---------------------------------------				
		//REESTABLECIENDO CLASS
		//---------------------------------------
		pos_fila = "impar";		  
		if((i+1)%2 == 0){ pos_fila = "par"; }
		attr_class = "row_data_list_"+pos_fila;
		$(trs[i]).removeClass("row_data_list_par row_data_list_impar");
		$(trs[i]).addClass(attr_class);
		
		//---------------------------------------
		//REESTABLECIENDO LOS INPUTS(HIDDEN)
		//---------------------------------------
		inputs = $("td input",trs[i]);
		setIdsNamesInpus_mante(tipo,inputs);		
		
		//---------------------------------------
	}
	
	//--------------------------------------------
}

del_item_mante = function(id,tipo){
	var id_condi = "";
		var R = confirm("Desea eliminar este item?");
	if(R){
		var n_trs = $("tr",$("#tab_listado_"+tipo)).length;
		//	alert(id);
		$("#"+id).remove();
		$("#trs_"+tipo).attr("value",n_trs-1);
		reestablecer_trs_mante(tipo);
	}

}

		