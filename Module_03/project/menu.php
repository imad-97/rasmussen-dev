<?php
include_once ('config3.php');
include_once ('opendb3.php');
$sql = "SELECT name, ingredients, concat('$', (price)) AS price FROM menu LIMIT 10";
$result = mysqli_query($sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="stylesheet" href="normalize.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title>Menu</title>
</head>

<body>

  <h1>Welcome to our menu website!</h1>
<table align="center" border="1px" style="width:600px; line-height:40px;">
  <tr>
    <th colspan="3"><h3>Menu</h3></th>
  </tr>
  <t>
    <th>name</th>
    <th>ingredients</th>
    <th>price</th>
  </t>
  <?php while($row = mysqli_fetch_assoc($result)) ?>
  <tr>
  <td> <?php echo $row['name']$?></td>
  <td> <?php echo $row['ingredients']$?></td>
  <td> <?php echo $row['price']$?></td>
  </tr>

<?php } ?>
</table>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/scripts.js"></script>
</body>
</html>
