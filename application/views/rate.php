<div class='container'>

	<h1>
		<?php echo $drink[0]->brand;?>
		<small>
			<?php echo $drink[0]->description;?>
		</small>
	</h1>

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

	<div class='col-md-6 panel panel-default'>
			<div class='panel-body'>

	<div class='col-md-6'>

				<b>Users Rating:</b>

				<?php 
					while ($average_rating > 0) {
						echo "<i class='fa fa-star text-warning'></i>";
						$average_rating--;
					}
				?>
			</div>

	<div class='col-md-6'>

				<b>Retail Price:</b>


				<?php echo $drink[0]->price; ?>



				<br />
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