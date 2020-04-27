<?php

include 'config3.php';
include 'opendb3.php';

$sql = "SELECT name, ingredients, concat('$', (price)) AS price FROM menu LIMIT 10";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {
echo "Name: " . $row["name"]. "<br>";
echo "Ingredients: " . $row["ingredients"]. "<br>";
echo "Price: " . $row["price"]."<br><hr>";
}
} else { echo "0 results";
}
mysqli_close($conn);
?>
 </div>
