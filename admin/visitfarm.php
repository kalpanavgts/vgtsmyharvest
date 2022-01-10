<?php
include("./middleware/session.php");
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
<style>
  .form_table
  {
    float: left;
    width: 100%;
    border-collapse: collapse;
    border: 1px solid ;
  }
  .form_table tbody td {
    padding:12px;
    border:1px solid ;
    font-size:14px;
    text-align:center;
   
  }
  .form_table thead th {
    padding:12px; 
    border:1px solid ;
    font-size:16px;
    font-weight:bold;
  }
  .form_table th td {
    border: 1px solid #ccc;
  }
</style>
<body>
    

<table class="form_table">
  <thead>
  <tr>
    <th>Name</th>
    <th>Mail Address</th>
    <th>Contact Number</th>
    <th>Month</th>
    <th>Who Are You</th>
  </tr>
  </thead>

  <?php
  $result = visitfarm();
  while ($row = $result -> fetch_assoc()) {
  ?>
  <tbody>
  <tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['mail']; ?></td>
    <td><?php echo $row['contactnumber']; ?></td>
    <td><?php echo $row['month']; ?></td>
    <td><?php echo $row['whoareyou']; ?></td>
  </tr>

  </tbody>

  <?php } ?>

</table> 

</body>
</html>