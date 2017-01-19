<?php if(isset($_SESSION['message'])): ?>
	<div class="alert alert-warning no_border_radius alert_sr" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
		<?php echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
	</div>
<?php endif; ?>

<h2 class="pull-left"><?php echo $page_title; ?></h2>

<div id="mpc" class="mpcback">
	<div class="pads">
		<?php $i=0; foreach($mpcfb as $mp): ?>
			<a href="<?php echo site_url('mpc/show/' . $mp->uhash); ?>">
				<div class="pad">
					<label><?php echo $i; ?></label>
					<label><?php echo '#' . $mp->uhash; ?></label>
					<span><?php echo character_limiter($mp->title, 15); ?></span>
				</div>
			</a>
			
		<?php $i++; ?>
		<?php endforeach; ?>
</div>