<?php
include 'config.php';

$name = $_POST['artistName'];
$country = $_POST['country'];

$sql = "INSERT INTO artists (name, country) VALUES ('$name', '$country')";

if (mysqli_query($conn, $sql)) {
  echo "New artist created successfully!";
  echo '<br><a href="add_artist.php">Add another</a>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>