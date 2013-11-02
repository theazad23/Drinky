<div class='container'>

<?php

  echo $this->session->userdata('session_id');

  foreach($schools as $s => $school) { 

    echo "<div class='col-lg-4'>";
    echo "<div class='panel panel-default'>";
    echo "<div class='panel-heading'>";
    echo "$school->school_name";
    echo "</div>";
    echo "<table class='table table-striped'>";


    foreach($school->grades as $g => $grade) { 

    echo "<tr><td>";
      echo $grade->grade;
    echo "</td><td>";
      echo $grade->applicants;
    echo "</td><td>";
      echo "<a class='btn btn-default btn-xs' href=''> wtf</a>";
    echo "</td></tr>";


    }

    echo "</table>";
    echo "</div>";
    echo "</div>";

  }

?>


<body>
<div class="container">




