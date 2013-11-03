<div class='container'>
	<h2><?php echo $username; ?>'s ratings:</h2>

<?php

foreach ($dashboard as $title => $tbl) {
	echo "<legend>$title</legend>";
	foreach ($tbl as $item) {
		echo "<div class='text-center'>";
		echo "<div class='col-md-4 '>";
		echo "<div class=' panel panel-default'>";
		echo "<div class='panel-heading'><b>".$item->alcohol_name."<b></div>";
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
	
