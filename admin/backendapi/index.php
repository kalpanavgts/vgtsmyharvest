<?php 
include ("../config/database.php");

// Function declaration start
function getGoogledoclink(){
  $db = new DB();
  $queried = $db->get("SELECT `link` FROM `googledoclink` WHERE id = 1");
  return $queried->fetch_object();
}

function updateGoogledoclink($REQ){
  $db = new DB();
  $updateQuery = "UPDATE googledoclink SET link='".$REQ['googlelink']."' WHERE id = 1";
  $result = $db->update($updateQuery);

  if($result === TRUE){
    echo json_encode('{ "status" : true , "message" : "updated"}');
  }else{
    echo json_encode('{ "status" : false , "message" : "something went wrong"}');
  }
}

// Function declaration end

// Function call start
if(isset($_REQUEST['updategoogledoclink'])){
  updateGoogledoclink($_REQUEST);
}
// Function call end

?>