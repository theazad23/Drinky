<div class='container'>
	<h2><?php echo $username; ?>'s ratings:</h2>

<form method='POST' name='userinput' action='me'>
	<tr><td>How would you like to sort your rated beverages?</td><td><select name='order'>
		<option value='highestrated'>By rating from highest to lowest</option>
                <option value='lowestrated'>By rating from lowest to highest</option>
		<option value='mostrecent'>By date from most recent to least recent</option>
		<option value='leastrecent'>By date from least recent to most recent</option>
	</select></td></tr>
	<input type='submit' name='submit' value='Submit'>
</form>



<?php


foreach ($dashboard as $title => $tbl) {
	echo "<legend>$title</legend>";
	foreach ($tbl as $item) {
		echo "<div class='text-center'>";
		echo "<div class='col-md-4 '>";
		echo "<div class=' panel panel-default'>";
		echo "<div class='panel-heading'><b>".$item->alcohol_name."<b></div>";
		echo "<small>".$item->rated."</small>";
		echo "<div class='panel-body'>";

		while ($item->rating > 0) {
			echo "<i class='fa fa-star fa-2x'></i>";
			$item->rating--;
		}
		echo "</div></div>";

	echo "</div></div>";
	}
}
?>

</div>
	
