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

<h2 class="pull-left"><?php echo $mpcfb->title; ?></h2>
<h2 class="head_hash pull-left">#<?php echo $mpcfb->uhash; ?></h2>
<div class="aut_rg pull-right">
	<h2 class="pull-right author_h"><a href="" title="autor"><?php echo $mpcfb->author; ?></a></h2>
	<div class="clearfix"></div>
	<h6 class="pull-right creat_dat"><?php echo $mpcfb->created_time; ?></h6>
</div>

<div id="mpc">
	<div class="pads"></div>
</div>

<div class="describef pull-left">
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
  		Opis
	</button>
</div>

<div class="tagsf pull-left">
	<?php 
		$tmp = explode(',', $mpcfb->tags);
		$a = count($tmp);
		for($i=0; $i<$a; $i++)
		{
			echo '<a href="' . site_url('mpc/tags/' . $tmp[$i]) . '" title="tag">' . '#' . $tmp[$i] . '</a>';
		}
	?>
</div>

<p class="pull-left wysw">Wyświetlenia: <?php echo $mpcfb->views; ?></p>
<p class="pull-left wysw">Ocena: <?php echo $mpcfb->vote; ?><?php if($this->input->cookie('mpc' . $mpcfb->id, true) != true): ?><i id="add_vote" class="glyphicon glyphicon-plus add_vote"></i><?php endif; ?></p>

<div class="gshare pull-left">
	<div class="g-plus" data-action="share" data-annotation="none" data-href="<?php echo current_url(); ?>"></div>
</div>
<div class="fb-share-button pull-left" data-href="<?php echo current_url(); ?>" data-layout="button"></div>
<a href="<?php echo current_url(); ?>" class="twitter-share-button"{count} data-lang="pl">Tweetnij</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $mpcfb->title; ?> - opis</h4>
      </div>
      <div class="modal-body">
        <?php if(!empty($mpcfb->describe)): ?>
			<?php echo $mpcfb->describe; ?>
        <?php else: ?>
			<p>Autor nie dodał opisu.</p>
        <?php endif; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

