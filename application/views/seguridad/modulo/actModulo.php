<?php
$incluir = base_url() . "assets/images/nuevo.png";



?>



        <br>            
        <div class="main-panel">
            <div class="content">
                <div class="page-inner mt--5">
                    <div class="row row-card-no-pd mt--2">
                        <div class="col-sm-12 col-md-12">
                            <div class="card card-stats card-round">
                                <div class="card-body ">
									 <h2><span style="color:blue">Modulos del Sistema</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>


                

                <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="text-align:right">
									<a href="javascript:void(0)"  data-toggle="modal" 
									   data-target="#miModal">
									   <img src="<?=$incluir;?>" style="width:35px; height:35px" alt="Incluir">
									</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
										<div id="bodyTabla">
										</div>
										
										
                                    </div>
                                </div>
                            </div>
                        </div>    
                </div>
            </div>
    



<!-- Modal -->
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content"  style="width:600px">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
			<form name="formulario" method="post" id="formulario" autocomplete="off">	
				
				
			  <div class="container">
				<div class="row">
					<div class="col-md-3">
                         <label style="padding-top: 0px; margin-top: 14px;margin-left:0px;">
							 <span style="color:#0000ff; font-size:14px; font-weight:600">Nombre:</span> </label>

					</div>
					
					<div class="col-md-9">
                        <input style="padding-top: 5px;margin-right:-20px;margin-top: 12px;" 
                               type="text" name="nombre" id="nombre"class="form-control" 
                               placeholder="Ingrese el nombre" maxlength="100" minlength="0"                                >
                        <div id="txtNombre" style="color:red; margin-left:9px; display:none"></div>       
					</div>
				</div>	
				
				<div class="row">
					<div class="col-md-3">
                         <label style="padding-top: 0px; margin-top: 14px;margin-left:0px;">
							 <span style="color:#0000ff; font-size:14px; font-weight:600">Orden de Visualización mostrar:</span> </label>

					</div>
					
					<div class="col-md-9">
                        <input style="padding-top: 5px;margin-right:-20px;margin-top: 12px;" 
                               type="text" id="orden" name="orden" class="form-control" 
                               placeholder="Ingrese el orden" maxlength="10" 
                               onkeyup="nro_entero('orden');">
                        <div id="txtOrden" style="color:red; margin-left:9px; display:none"></div>       
					</div>
				</div>	
			  </div>				
			</form>  
			  
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary" onclick="guardar_form('0')">Guardar</button>
			</div>
		</div>
	</div>
</div>

