<?php 
include ("../config/database.php");

$db = new DB();
$data = $db->get("SELECT * FROM masters"); 


if ($result = $data) {
    while ($row = $result -> fetch_assoc()) {
      echo $row["master_id"];
      echo $row["master_name"];
    }
    $result -> free_result();
  }
  
?>