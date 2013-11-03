<div class='container'>

	<div class = 'page-title'><h1>
		<?php echo $drink[0]->brand;?>
		<br />
		<small>
			<?php echo $drink[0]->description;?>
		</small>
		<small class='pull-right hidden'>
			Retail Price: <?php echo $drink[0]->price;?>
		</small>
	</div>
	</h1>

<legend>
</legend>

	<i class='fa fa-user fa-2x pull-left'></i>

	<div class="rating text-left">

		<?php 
		$i = 5;
		while ($i){
			echo "<span id=$i class='star'>☆</span>";
			$i--;
		}
		?>
	</div>

	<br />

	<i class='fa fa-globe fa-x pull-left text-muted'></i>
			<p class='led'>
			<?php 
				$r = $average_rating;
				while ($r > 0) {
					if ($r > 0.99) {
						echo "<i class='fa fa fa-star text-muted'></i>";
					} else {
						echo "<i class='fa fa fa-star-half-o text-muted'></i>";
					}
					$r--;
				}
			?>
		</p>
			<br /><br />




<!-- Large button group -->
<h2> Ask me how this was </h2>

<!-- Split button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>




</h2>
			</div>
		</div>
	</div>
</div>


<script type='text/javascript'>

	// submit ratings the hard way.
	$('.star').click(function() {
		var url = "<?php 
			$d = urlencode($drink[0]->brand);
			echo site_url("/me/rate/?brand=$d&rating="); 
			?>" + this.id;
		window.location.href = url;
    	});

</script>