<!DOCTYPE html>
<html>
<head>
    <title>My First PHP Page</title>
</head>
<body>
    <?php
        $username = "World";
        echo "<h1>Hello, " . $username . "!</h1>";

        $current_time = date("h:i:sa");
        echo "<p>The current time is " . $current_time . "</p>";
    ?>
</body>
</html>