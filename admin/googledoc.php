<?php
include("./middleware/session.php");
include("./controllers/index.php");
$data = getGoogledoclink();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Visit Form</title>
</head>
<style>
  .login_form
{
  margin: auto;
    align-items: center;
    justify-content: center;
    padding:30px;
    border-radius: 10px;
    border: 1px solid #000;
    float: left;
    width:25%;
}
.login_input
{
  padding:12px;
}
</style>
<body>
    
<div class="w-full m-auto h-screen flex">
<form  class="login_form">
  <label for="fname">Link</label><br>
  <textarea type="text" id="googlelink" name="googlelink"><?php echo $data->link; ?></textarea>
  <input class="login_input" type="button" value="Update" onclick="updateLink()">
</form>
</div>


<script type="text/javascript" src="./js/jquery.min.js"> </script>
<script type="text/javascript">
  function updateLink(){

    let googlelink = document.getElementById("googlelink").value;
    let fordata = { googlelink , updategoogledoclink : true };

    $.post("backendapi/index.php", fordata, function (sucdata) {
     alert("Link has been updated");
   });

  }

</script>

</body>
</html>