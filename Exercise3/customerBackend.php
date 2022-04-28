<?php
  $shoe1Quantity = $_POST["shoe1"];
  $shoe1Price = 85;
  $shoe2Quantity = $_POST["shoe2"];
  $shoe2Price = 65;
  $shoe3Quantity = $_POST["shoe3"];
  $shoe3Price = 120;
  echo "<table>";
  echo "<tr>";
  echo "<th>&nbsp;</th>";
  echo "<td><strong>Quantity</strong></td>";
  echo "<td><strong>Cost Per Item</strong></td>";
  echo "<td><strong>Sub Total</strong></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>The Toe Friends IV Shoe™</td>";
  echo "<td>".$shoe1Quantity."</td>";
  echo "<td>$".$shoe1Price."</td>";
  echo "<td>$".($shoe1Quantity * $shoe1Price)."</td>";
  echo "</tr>";
?>
