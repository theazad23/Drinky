<div class='container'>
	<a href="add_school" class='btn btn-sm btn-default'>
		Add A School
	</a>
	<hr class="break">
<?php

	foreach ($schools as $school) {
		echo "<div class='col-md-6 '>";
		echo "<table class='table table-striped table-bordered table-condensed panel panel-default'>";
		foreach ($school as $key => $value) {
			if ($key != 'school_id'){
				echo "<tr><td>$key</td>";
				echo "<td><input type='text' class='form-control' placeholder=$value></td><";
				echo "/tr>";

			}
		}	
		echo "</table></div>";
	}

?>

	</div>
</div>
	