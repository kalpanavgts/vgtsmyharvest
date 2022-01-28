<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
if(!isset($_SESSION["loggined_in"])){
    // echo "<script>window.location = '../admin'</script>";
}
?>