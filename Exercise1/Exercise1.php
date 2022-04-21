<?php
  echo "<table>";
  echo "<tr>";
  echo "<th>&nbsp;</th>";
  for ($i = 1; $i <= 100; $i++)
  {
    echo "<td><strong>".$i."</strong></td>";
  }
  echo "</tr>";
  for ($i = 1; $i <= 100; $i++)
  {
    echo "<tr>";
    echo "<th>".$i."</th>";
    for ($j = 1; $j <= 100; $j++)
    {
      $product = $i * $j;
      echo "<td>".$product."</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
?>
