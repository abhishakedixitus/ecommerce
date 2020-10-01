<?php


include 'connection.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

 echo "<table border=5px solid; bgcolor=#e08b3e; width=100%; height=50%; cellpadding=20%";
 echo "<tr>";
 	echo "<th>PRODUCT ID</td>";
 	echo "<th>PRODUCT NAME</td>";
 	echo "<th>PRICE</td>";
 	echo "<th>TYPE</td>";
 while($row = $result->fetch_assoc()) {
 	echo "<tr>";
          echo "<td align=center>".$row["p_id"]."</td>"."<td align=center>".$row["p_name"]."</td>"."<td align=center>".$row["p_price"]."</td>"."<td align=center>".$row["p_type"]."</td>" ;
     echo "</tr>";
    }
  echo "</table>";

$conn->close();
