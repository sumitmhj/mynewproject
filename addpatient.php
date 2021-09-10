

<?php
require 'connection.php';

$sql = "SELECT * FROM doctor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " <br>";
    echo "<b>doctorid</b> ".$row["id"]. " <b> Name</b> " . $row["firstname"]. " ". $row["lastname"]. " <b> Major</b> ".$row["major"]. " <b> Room no:</b> ". $row["roomno"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>