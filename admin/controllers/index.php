<?php 
include ("./config/database.php");

function basicform(){
  $db = new DB();
  return $db->get("SELECT * FROM `basicform`");
}

function visitfarm(){
  $db = new DB();
  return $db->get("SELECT * FROM `visitfarm`");
}

?>