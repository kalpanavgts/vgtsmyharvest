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

function getGoogledoclink(){
  $db = new DB();
  $queried = $db->get("SELECT `link` FROM `googledoclink` WHERE id = 1");
  return $queried->fetch_object();
}
?>