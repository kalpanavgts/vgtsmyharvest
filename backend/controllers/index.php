<?php 
include ("../../admin/config/database.php");

function store_visitfarm($REQ){
  $db = new DB();
  $con = $db->mysqli();
  $filtered_name = $con->real_escape_string($REQ['name']);
  $filtered_mail = $con->real_escape_string($REQ['mail']);
  $filtered_contactnumber = $con->real_escape_string($REQ['contactnumber']);
  $filtered_month = $con->real_escape_string($REQ['month']);
  $filtered_whoareyou = $con->real_escape_string($REQ['whoareyou']);

  $insertQuery = "INSERT INTO `visitfarm`(
    `name`,
    `mail`,
    `contactnumber`,
    `month`,
    `whoareyou`) 
  VALUES 
  (
  '".$filtered_name."',
  '".$filtered_mail."',
  '".$filtered_contactnumber."',
  '".$filtered_month."',
  '".$filtered_whoareyou."'
  )";

  return $db->post($insertQuery);
}


function store_basicform($REQ){
  $db = new DB();
  $con = $db->mysqli();
  $filtered_name = $con->real_escape_string($REQ['name']);
  $filtered_mail = $con->real_escape_string($REQ['mail']);
  $filtered_contactnumber = $con->real_escape_string($REQ['contactnumber']);
  $filtered_location = $con->real_escape_string($REQ['location']);
  $filtered_formname = $con->real_escape_string($REQ['formname']);

  $insertQuery = "INSERT INTO `basicform`(
    `name`,
    `mail`,
    `contactnumber`,
    `montlocationh`,
    `fromwhere`) 
  VALUES 
  (
  '".$filtered_name."',
  '".$filtered_mail."',
  '".$filtered_contactnumber."',
  '".$filtered_location."',
  '".$filtered_formname."'
  )";

  return $db->post($insertQuery);
}


?>