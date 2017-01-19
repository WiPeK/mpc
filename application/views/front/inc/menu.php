<div class="col-lg-3 no_space menu_col">
	<div class="menu_bar no_space">
		<div class="logo">
			<a href="<?php echo site_url(); ?>" title="WiPeK.pl">WiPeK.pl</a>
		</div>
		<ul class="ul_menu">
			<li>
				<a href="<?php echo site_url(); ?>mpc/create_new" title="Add new mpc">
					Dodaj mpc
				</a>
			</li>
			<li>
				<a href="<?php echo site_url('mpc'); ?>" title="All mpc">
					Wszystkie mpc
				</a>
			</li>
			<li>
				<a href="<?php echo site_url('mpc/newest'); ?>" title="Newest mpc">
					Najnowsze
				</a>
			</li>
			<li>
				<a href="<?php echo site_url('mpc/best'); ?>" title="Best mpc">
					Najlepiej oceniane
				</a>
			</li>
			<li>
				<a href="<?php echo site_url('mpc/top_views'); ?>" title="Top views mpc">
					Najczęściej wyświetlane
				</a>
			</li>
		</ul>
		<div class="space100"></div>
		<?php echo form_open(site_url('mpc/search')); ?>
		<div class="form-group form_search">
		  <div class="input-group">
		    <input type="text" name="search" class="form-control input_search" placeholder="Szukaj">
		    <span class="input-group-btn">
		      <button type="submit" class="btn btn-default btn_search" type="button">
		      	<i class="glyphicon glyphicon-search"></i>
		      </button>
		    </span>
		  </div>
		</div>
		<?php echo form_close(); ?>
		<div class="social_icons">
            <a href="https://www.facebook.com/krzysiek.adamczyk.5" title="Like us"><i class="fa fa-facebook-square"></i></a>
            <a href="http://www.mpcforum.pl/user/403780-wipekkk/" title="Mpc forum"><i class="fa fa-pencil-square-o"></i></a>
            <a href="https://www.instagram.com/_wipek_/" title="follow me"><i class="fa fa-instagram"></i></a>
            <a href="http://www.wipek.pl" title="Portfolio"><i class="fa fa-globe"></i></a>
        </div>
        <div class="created_by">
        	<a href="http://www.wipek.pl">Strona stworzona przez wipek.pl</a>
        </div>	
	</div>
</div>