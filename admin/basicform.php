<?php 
include("./controllers/index.php");
include("./controllers/index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Basic Form</title>
</head>
<body>

<table>
  <tr>
    <th>Name</th>
    <th>Mail Address</th>
    <th>Contact Number</th>
    <th>Location</th>
  </tr>

  <?php
  $result = basicform();
  while ($row = $result -> fetch_assoc()) {
  ?>
  
  <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['mail']; ?></td>
    <td><?php echo $row['contactnumber']; ?></td>
    <td><?php echo $row['location']; ?></td>
  </tr>

  <?php } ?>

</table> 

</body>
</html>