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
<body>
    

<form >
  <label for="fname">Link</label><br>
  <textarea type="text" id="googlelink" name="googlelink"><?php echo $data->link; ?></textarea>
  <input type="button" value="Update" onclick="updateLink()">
</form>

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