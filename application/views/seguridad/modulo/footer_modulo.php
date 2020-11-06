



   <script>
	   
       $(document).ready(function(){
		   cargarDataTable(0);
		});
	</script>  	


<script>
//Cargar Datatable

function cargarDataTable(id){
    $.ajax({
		url : "<?php echo site_url('Sg_modulo/ajax_datatable')?>/"+id,
		type: "GET",                     
		dataType: "JSON",
		success: function(data){
			 document.getElementById('bodyTabla').innerHTML = data.registro;
			 
			 $(document).ready(function() {
				$('#basic-datatables').DataTable({
			    });	
			 });

		},
		error: function (jqXHR, textStatus, errorThrown){
			alert('Error consultando la Base de Datos');
		}
	});
}


function incluir_form(){
	alert("ibcluir");	
	
}


function modificar_form(id){
alert("id: " + id);	
	
}

function eliminar_form(id){
alert("id: " + id);	
	
}

function reactivar_form(id){
alert("id: " + id);	
	
}

function guardar_form(id){
error=0;
formulario = "formulario";

objeto = "nombre";
campo = document.forms[formulario].elements[objeto].value;
campo = campo.replace(/(^\s*)|(\s*$)/g,"");

nombre = campo;

document.getElementById('txtNombre').style.display = "none";
if (campo.length==0){
	document.getElementById('txtNombre').style.display = "inline";
    document.getElementById('txtNombre').innerHTML = "Ingrese el nombre"; 	
	
    error = 1;
}else{
	nombre = campo.replace(" ","aaa");
    $.ajax({
        url : "<?php echo site_url('Sg_modulo/ajax_validar_duplicidad')?>/" + nombre,
        type: "GET",                     
        dataType: "JSON",
        success: function(data){
			if(data.status==1){
				document.getElementById('txtNombre').style.display = "inline";
				document.getElementById('txtNombre').innerHTML = "El Nombre ingresado, ya se encuentra registrado."; 	
			}
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error consultando la Base de Datos');
        }
    });		
}

objeto = "orden";
campo = document.forms[formulario].elements[objeto].value;
campo = campo.replace(/(^\s*)|(\s*$)/g,"");

orden=campo;

document.getElementById('txtOrden').style.display = "none";
if (campo.length==0){
	document.getElementById('txtOrden').style.display = "inline";
	document.getElementById('txtOrden').innerHTML = "Ingrese el orden de vizualización"; 	
    error = 1;
}


if(error==1){
    return false;
}else{
	parametros = nombre + "xx"+orden;

    $.ajax({
        url : "<?php echo site_url('Sg_modulo/ajax_incluir')?>/"+parametros,
        type: 'get',
        dataType: "JSON",
        success: function(data){
			if(data.status==1){
				document.getElementById('txtNombre').style.display = "inline";
				document.getElementById('txtNombre').innerHTML = "El Nombre ingresado, ya se encuentra registrado."; 	
			}
			
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error consultando la Base de Datos');
        }
        
    });		
	return true;
}


}  //fin validar






</script>
