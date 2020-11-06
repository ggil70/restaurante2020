



<?php
//Armar el primer datatable
   $ruta = base_url() . 'TablaGenerica/ajax_datatable/' . $primerTabla;	   
?>
   <script>
       $(document).ready(function(){
		   seleccionTabla(<?=$primerTabla;?>);
		});
	</script>  	


<script>
//Seleccionar tabla y crear datatable	
function seleccionTabla(id){
	if(id==0){
        id=document.forms['formulario'].elements['idTablaGenerica'].value;
    }
    $.ajax({
		url : "<?php echo site_url('TablaGenerica/ajax_datatable')?>/" + id,
		type: "GET",                     
		dataType: "JSON",
		success: function(data){

			document.getElementById('nroRegistro').innerHTML = data.nroRegistro;
			document.getElementById('titulo').innerHTML = data.titulo;
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

function modificar(id){
alert("ID: " + id);	
	
}

</script>
