<?php 
include ("./config/database.php");

// Function declaration start
function basicform(){
  $db = new DB();
  return $db->get("SELECT * FROM `basicform`");
}

function visitfarm(){
  $db = new DB();
  return $db->get("SELECT * FROM `visitfarm`");
}

// Function declaration end
?>