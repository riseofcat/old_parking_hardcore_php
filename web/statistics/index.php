<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
</head>
Статиcтика посещаемости:<br/>
<?php
$servername = "localhost";
$username = "958107";
$password = "123321qw";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM  `958107`.`statistic` ORDER BY count DESC LIMIT 0, 10";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        print_r($row);
        echo "</br>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>
</html>
