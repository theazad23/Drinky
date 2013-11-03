<div class='container'>

	<div class = 'page-title'><h1>
		<?php echo $drink[0]->brand;?>
		<small>
			<?php echo $drink[0]->description;?>
		</small>
		<small class='pull-right hidden'>
			Retail Price: <?php echo $drink[0]->price;?>
		</small>
	</div>
	</h1>

<div class='row'>
	<div class='col-md-2'>

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
	
	</div>
	<div class='col-md-9'>


		<?php foreach($tags as $tag){
			 	echo " <span class='text-muted'>";
			 	echo " <i class='fa fa-fw fa-tag'></i>";
			 	echo $tag->tag;
			 	echo "</span> ";
			 }?>


	</div>
	</div>


<legend></legend>


<div class='row'>

<div class='col-md-3'>
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

</div>

<form class='form-inline tagsForm' action=''>

	<input type="hidden" name="brand" value="<?php echo $drink[0]->brand;?>">
	<div class='col-md-1'>
		<i class='fa fa-fw fa-2x fa-tags pull-right'></i>
	</div>
	<div class='col-md-4'>
		<select data-placeholder = "Select tags" 
							name = "tags[]" multiple="yes"
						   class = "chosen-select" 
		    			  	  id = "tags">
	        
	        <option selected disabled>Add tags!</option>
			 <?php foreach($allTags as $tag){
			 	echo "<option value=$tag->tag>";
			 	echo $tag->tag;
			 	echo "</option>";
			 }?>
	  	</select>
	</div>
	<div class='col-md-1'>
  		<input type='submit' value="Add" class="btn btn-default btn-sm btn-block">
	</div>
</form>

</div>

	<br />
	<br />







  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {no_results_text:"<a id='newTag'> New tag</a>"
  									, width:"100%", search_contains:"true"},




      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:"<a id='newTag'> New tag</a>"},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }


	// submit ratings the hard way.
	$('.star').click(function() {
		var url = "<?php 
			$d = urlencode($drink[0]->brand);
			echo site_url("/me/rate/?brand=$d&rating="); 
			?>" + this.id;
		window.location.href = url;
    	});

</script>