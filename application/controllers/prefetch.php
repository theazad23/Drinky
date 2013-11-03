<?php

function doQuery($query) {
  $conn = pg_connect("host=dbhost-pgsql.cs.missouri.edu dbname=cs3380f13grp12 user=cs3380f13grp12 password=bZGiwpZu")
    or die('Could not connect: ' . pg_last_error());
  $result = pg_query($query) or die('No Query Executed ' . pg_last_error());
  return $result;
}

$query = "SELECT brand FROM project.alcohols group by brand";

$result = doQuery($query);

$rows = array();
while($r = pg_fetch_assoc($result)) {
    
    $rows[] = $r['brand'];

}
echo json_encode($rows);

?>
           
