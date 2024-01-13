<?php
$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) {
  die("connection failed:" . $conn->connect_error);
}

$query = "SELECT * FROM student;";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . " " . $row["lastname"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
