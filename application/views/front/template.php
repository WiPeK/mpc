<?php $this->load->view('front/inc/header'); ?>
<div class="container-fluid no_space">
	<div class="row no_space jsres">
		<?php $this->load->view('front/inc/menu'); ?>
		<div class="col-lg-9 no_space">
			<?php $this->load->view($subview); ?>
		</div>
	</div>
</div>
<?php $this->load->view('front/inc/footer'); ?>


	
