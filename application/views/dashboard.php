<div class='container'>
		<div class='panel-body'>
<?php
foreach ($everything as $title => $tbl) {
	echo "<legend>$title</legend>";
	foreach ($tbl as $att) {
		echo "<div class='col-md-3'>";
		echo "<table class='table table-striped table-bordered table-condensed panel panel-default'>";
		foreach ($att as $key => $value) {
			echo "<tr><td>";
			echo $key;
			echo "</td><td>";
			echo $value;
			echo "</td></tr>";
		}	
	echo "</table></div>";
	}
}
?>
	</div>
</div>
	