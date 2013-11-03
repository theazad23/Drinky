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

<legend></legend>

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


        
        <div>
          <em>Tags</em>
 <select data-placeholder="Your Favorite Types of Bear" multiple class="chosen-select" style="width:350px;" tabindex="18" id="multiple-label-example">
            <option selected>Amazing</option>
            <option>Too sweet</option>
            <option>Rediculous</option>
            <option>Hangover!</option>
            <option>good with twinkies</option>
          </select>
        </div>
      </div>

  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  </form>
















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