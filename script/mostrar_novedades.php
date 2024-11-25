<?php
$conn = require "conectar.php";

$sql = "SELECT * FROM novedades";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div class=\"novedades-caja\">";
      echo "<section class=\"novedad\">";
      echo "<h3>" . $row["titulo"] . "</h3>";
      if ($row["img_path"] != "")
      {
        echo "<img src=\"" . $row["img_path"] ."\">";
      }
      echo "<p>" . $row["contenido"] . "</p>";
      echo "</section>";
      echo "</div>";
    }
} else {
    echo "<h3>No hay novedades</h3>";
}

$conn->close();