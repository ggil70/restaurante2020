
 	<script src="<?= base_url('assets/assets_login1/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>

   	<script src="<?= base_url('assets/assets_login1/vendor/bootstrap/js/popper.js') ?>"></script>
  	
  	<script src="<?= base_url('assets/assets_login1/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

   	<script src="<?= base_url('assets/assets_login1/vendor/animsition/js/animsition.min.js') ?>"></script>


 	<script src="<?= base_url('assets/assets_login1/vendor/countdowntime/countdowntime.js') ?>"></script>

  	<script src="<?= base_url('assets/assets_login1/js/main.js') ?>"></script>

  	<script src="<?php echo base_url()?>assets/assets_sistema/toastr.min.js"></script>
</body>
</html>

<script>
	$(function(){

		var message = '<?= $this->session->flashdata("message") ?>';
		var type = '<?= $this->session->flashdata("type") ?>';
		
		if(message)
		{	
				if(type == 'danger')
			     {
					toastr.warning(message, 'Advertencia!',{
					hideMethod: 'fadeOut',
				    })	
				 }

				 if(type == 'error')
			     {
					toastr.error(message, 'Error!',{
					hideMethod: 'fadeOut',
					})
				 }

				 if(type == 'success')
			     {
					toastr.success(message, 'Correcto!',{
					hideMethod: 'fadeOut',
					})
				 }
				 
		}
	})
</script>