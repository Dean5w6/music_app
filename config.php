$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "db_music";

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM artists";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Artist Name: " . $row["name"].  " - Country: " . $row["country"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);