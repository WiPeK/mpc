		<script src="<?php echo site_url(); ?>assets/js/jquery.js"></script>
    	<script src="<?php echo site_url(); ?>assets/js/bootstrap.min.js"></script>
    	<script src="<?php echo site_url(); ?>assets/js/js.cookie.js"></script>
    	<script>
		    $(document).ready(function(){
		        resizeDiv();
		        vpc = $(window).height();
		        $('.jsres').css({'height': vpc + 'px'});
		    });

		    window.onresize = function(event) {
		        resizeDiv();
		    }

		    function resizeDiv() {
		        //vpw = $(window).width();
		        vph = $(window).height();
		        //vns = $(document).height();
		        $('.menu_col').css({'height': vph + 'px'});
		    }
		</script>
		<?php if(isset($mpc) && $mpc === true): ?>
		<script>
			Samples = [
			<?php 
			for($i = 0; $i < 36; $i++)
			{
				$nn = 'mFile' . $i;
				echo 'new Audio("' . site_url() . 'assets/music/' . $mpcfb->$nn .'"),';
			}		
			?>	
			];

			Pads = [
				<?php 
				for($i = 0; $i < 36; $i++)
				{
					$nm = 'tekst' . $i;
					if($keyText[$i]['key'] == '188')
					{
						echo '{key: ' . $keyText[$i]['key'] . ', label: "' . $mpcfb->$nm . '",alt: ","},';
					}
					elseif($keyText[$i]['key'] == '190')
					{
						echo '{key: ' . $keyText[$i]['key'] . ', label: "' . $mpcfb->$nm . '",alt: "."}';
					}
					else
						echo '{key: ' . $keyText[$i]['key'] . ', label: "' . $mpcfb->$nm . '"},';
				}		
				?>
			]

			function playSample(index) {
			    Samples[index].play();
			    $("#mpc .pads .pad").eq(index).addClass("active");

			    Samples[index].onended = function() {
			        $("#mpc .pads .pad").eq(index).removeClass("active");
			    }
			}

			$(document).ready(function() {
			    for (var i in Pads) {
			        var pad = Pads[i];

			        var div = $("#mpc .pads").append($("<div class='pad'></div>")).find("div:last");
			        div.append("<label>" + (pad.alt == undefined ? String.fromCharCode(pad.key) : pad.alt) + "</label>");
			        div.append("<span>" + pad.label + "</span>");
			    }

			    $("#mpc .pads .pad").click(function() {
			        playSample($(this).index())
			    });

			    $(document).keydown(function(e) {
			        //console.log(e.which);

			        for (var i in Pads) {
			            if (Pads[i].key == e.which) {
			                playSample(i);
			            }
			        }
			    });
			});
		</script>
		<script>
			if(Cookies.get('mpc' + <?php echo $mpcfb->id ?>) == 'voted')
			{	
				$('#add_vote').remove();
			}
		</script>
		<?php if($this->input->cookie('mpc' . $mpcfb->id, true) != true): ?>
		<script>
		$(document).ready(function(){
			$('#add_vote').click(function(){
				if(Cookies.get('mpc' + <?php echo $mpcfb->id ?>)!= 'voted')
				{
					$.get("<?php echo site_url('mpc/add_vote/' . $mpcfb->id); ?>", function()
					{
						Cookies.set('mpc' + <?php echo $mpcfb->id ?>, 'voted', { expires: 365, path: '' });
						$('#add_vote').remove();
					});		
				}
			});
		});
		</script>
	<?php endif; ?>
	<?php endif; ?>
	</body>
</html>