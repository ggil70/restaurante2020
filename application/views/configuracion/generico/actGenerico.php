
        <br>            
        <div class="main-panel">
            <div class="content">
                <div class="page-inner mt--5">
                    <div class="row row-card-no-pd mt--2">
                        <div class="col-sm-6 col-md-6">
                            <div class="card card-stats card-round">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-9">
												<div class="form-group">
													<label><h3>Seleccione tabla a actualizar:</h3></label>
                                                    <form id="formulario" name="formulario">     
													<select onchange="seleccionTabla('0')" class="form-control" 
													        id="idTablaGenerica" style="width:400px">
													    <?php 
														foreach($rowGenerica as $key){ 
															if($primerTabla==$key->id){
                                                            ?>
                                                                <option value="<?php echo $key->id;?>" selected="selected">
                                                                    <?php echo $key->nombre;?>
                                                                </option> 
                                                            <?php
															}else{
														    ?>
																<option value="<?php echo $key->id;?>"><?php echo $key->nombre;?></option>
														    <?php 
														    }} ?>														
													</select>
													</form>
												</div>
                                            </div>
                                        <div class="col-3">
											<br><br>
											<button class="btn btn-primary btn-round" onclick="javascript:seleccionTabla('0')">Actualizar</button>
										</div>	
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-stats card-round">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-12"style="padding-top:10px">
                                            <div class="numbers">
												<label><h3>Número de registros</h3></label>
                                                <h4 class="card-title">
													<div id="nroRegistro"></div> 
												</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                

                <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
										<div id="titulo"></div>
									</h4>
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
    
