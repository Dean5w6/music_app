<?php 
include 'config.php';

echo "<h1>List of Artists</h1>";
  
$sql = "SELECT * FROM artists";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) { 
  while($row = mysqli_fetch_assoc($result)) {
    echo "<b>Artist Name:</b> " . $row["name"]. " - <b>Country:</b> " . $row["country"]. "<br>";
  }
} else {
  echo "No artists found in the database.";
}
 
mysqli_close($conn);
?>