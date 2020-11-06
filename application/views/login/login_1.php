<?php
$imagen = base_url() . "assets/images/sushi01.jpeg";
$titulo = "Sistema de Restautante Sushi";
?>



<link href="<?php echo base_url()?>assets/assets_login1/css/main.css" rel="stylesheet" type="text/css">

<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<?php /* <img src="<?= base_url().'assets/assets_login1/images/'.$banner ?>"
				 alt="" 
				style="width: 100%; max-width: 100%; height: auto;">
				*/ ?>
 
				 <form action="<?=base_url('acceso')?>" class="login100-form validate-form" method="post">	

					<span class="login100-form-title p-b-43">
						<?=$titulo; ?>
					</span>
					
					
			<div class="wrap-input100 validate-input" data-validate = "Alerta email es requerido: ex@abc.xyz">
			
			<input class="input100" 
            type="email" name="email">

            <span class="focus-input100"></span>
            
            <span class="label-input100">Email</span>
			
			</div>		
					<div class="wrap-input100 validate-input" data-validate="Alerta password es requerido">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				
				</form>

				<div class="login100-more" 
				     style="background-image: url('<?php echo base_url()?>assets/images/sushi01.jpeg?>');">
				</div>
			</div>
		</div>
	</div>
	

  
