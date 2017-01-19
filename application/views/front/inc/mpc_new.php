<?php if(isset($_SESSION['message'])): ?>
	<div class="alert alert-warning no_border_radius alert_sr" role="alert">
		<?php echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
	</div>
<?php endif; ?>
<?php echo form_open_multipart(site_url('mpc/save')); ?>
<div id="mpc">
	<div class="pads">
		<?php $i=0; foreach($keyText as $pk): ?>
			<div class="pad" data-toggle="modal" data-target="<?php echo '#mModal' . $i; ?>">
				<label><?php echo $pk[0]; ?></label>
				<span><?php echo $pk[1]; ?></span>
			</div>
		<?php $i++; ?>
		<?php endforeach; ?>
</div>


<?php $i = 0; foreach($keyText as $pk): ?>
	<div class="modal" id="<?php echo 'mModal' . $i; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo 'myModalLabel' . $i; ?>">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></button>
	        <h4 class="modal-title">Klawisz <?php echo $pk[0]; ?></h4>
	      </div>
	      <div class="modal-body">
	        <div class="form-group modal_ed">
		      <label for="<?php echo 'tekst' . $i; ?>" class="col-lg-2 control-label"><?php echo $pk[1]; ?></label>
		      <div class="col-lg-10">
		        <input type="text" class="form-control" name="<?php echo 'tekst' . $i; ?>" placeholder="<?php echo $pk[1]; ?>">
		      </div>
		    </div>
		    <div class="form-group modal_ed">
		      <label for="<?php echo 'mfile' . $i; ?>" class="col-lg-2 control-label"><?php echo 'Dźwięk ' . $pk[0]; ?> mp3/ogg</label>
		      <div class="col-lg-10">
		        <?php echo form_upload('mFile[]','','class="infil"'); ?>
		      </div>
		    </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Zapisz</button>
	      </div>
	    </div>
	  </div>
	</div>
	<?php $i++; ?>
<?php endforeach; ?>

	<div class="modal fade" id="mModalinput" tabindex="-1" role="dialog" aria-labelledby="mModalinput">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove"></i></button>
	        <h4 class="modal-title">Inne</h4>
	      </div>
	      <div class="modal-body muzup">
	        <div class="form-group modal_ed">
		      <label for="title" class="col-lg-2 control-label">Nazwa</label>
		      <div class="col-lg-10">
		        <input type="text" id="title" class="form-control" name="title" placeholder="Nazwa">
		      </div>
		    </div><br>
		    <div class="form-group modal_ed">
		      <label for="desc" class="col-lg-2 control-label">Opis</label>
		      <div class="col-lg-10">
		        <textarea class="form-control" id="desc" rows="3" name="describe"></textarea>
		      </div>
		    </div>
		    <div class="clearfix"></div>
		    <div class="form-group modal_ed">
		      <label for="tags" class="col-lg-2 control-label">Tagi (oddzielone przecinkami)</label>
		      <div class="col-lg-10">
		        <input type="text" id="tags" class="form-control" name="tags" placeholder="Tagi">
		      </div>
		    </div>
		    <div class="clearfix"></div>
		    <div class="form-group modal_ed">
		      <label for="author" class="col-lg-2 control-label">Autor</label>
		      <div class="col-lg-10">
		        <input type="text" id="author" class="form-control" name="author" placeholder="Autor">
		      </div>
		    </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Zapisz</button>
	      </div>
	    </div>
	  </div>
	</div>

<div class="col-lg-7"></div>
<button class="btn btn-primary btn-lg btn_mod" type="button" data-toggle="modal" data-target="#mModalinput">
	Uzupełnij
</button>
<button type="submit" class="btn btn-primary btn-lg" type="button">
	Zapisz
</button>
<?php echo form_close(); ?>
