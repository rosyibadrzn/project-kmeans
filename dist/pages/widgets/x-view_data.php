<?php
include __DIR__ . '/../db_connect.php';

$result = $conn->query("SELECT * FROM data_points");

echo "<div class='container mt-5'>";
echo "<h1>Data Points</h1>";
echo "<table class='table table-bordered'>";
echo "<thead><tr><th>ID</th><th>X Value</th><th>Y Value</th><th>Cluster</th></tr></thead>";
echo "<tbody>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['x_value']}</td>
            <td>{$row['y_value']}</td>
            <td>{$row['cluster']}</td>
          </tr>";
}

echo "</tbody></table>";
echo "</div>";
?>
