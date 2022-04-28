<?php
  $shoe1Quantity = $_POST["shoe1"];
  $shoe1Price = 85;
  $shoe1Total = $shoe1Quantity * $shoe1Price;
  $shoe2Quantity = $_POST["shoe2"];
  $shoe2Price = 65;
  $shoe2Total = $shoe2Quantity * $shoe2Price;
  $shoe3Quantity = $_POST["shoe3"];
  $shoe3Price = 120;
  $shoe3Total = $shoe3Quantity * $shoe3Price;
  $shipping = $_POST["shipping"];
  $shippingCost = 0;
  echo "<link rel='stylesheet' href='style.css'>";
  echo "<table>";
  echo "<tr>";
  echo "<th>&nbsp;</th>";
  echo "<td><strong>Quantity</strong></td>";
  echo "<td><strong>Cost Per Item</strong></td>";
  echo "<td><strong>Sub Total</strong></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><strong>The Toe Friends IV Shoe™</strong></td>";
  echo "<td>".$shoe1Quantity."</td>";
  echo "<td>$".$shoe1Price."</td>";
  echo "<td>$".$shoe1Total."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><strong>Jandals™</strong></td>";
  echo "<td>".$shoe2Quantity."</td>";
  echo "<td>$".$shoe2Price."</td>";
  echo "<td>$".$shoe2Total."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><strong>Straight Up Ugly Shoes III™</strong></td>";
  echo "<td>".$shoe3Quantity."</td>";
  echo "<td>$".$shoe3Price."</td>";
  echo "<td>$".$shoe3Total."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td><strong>Shipping</strong></td>";
  echo "<td colspan='2'>".$shipping."</td>";
  if ($shipping == "$50.00 over night")
  {
    $shippingCost = 50;
  }
  else if ($shipping == "$5.00 three day")
  {
    $shippingCost = 5;
  }
  echo "<td>$".$shippingCost."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td colspan='3' style='text-align:center'><strong>Total Cost</strong></td>";
  echo "<td>$".($shoe1Total + $shoe2Total + $shoe3Total + $shippingCost)."</td>";
  echo "</tr>";
  echo "</table>";


?>
