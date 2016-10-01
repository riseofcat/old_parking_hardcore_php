<?php
//$file = fopen("visit.txt", "a+");
//date_default_timezone_set("Europe/Moscow");
//fwrite($file, date('H:i:s d.m.Y')."   ". $_SERVER['HTTP_USER_AGENT']. "  IP:".getenv('REMOTE_ADDR')."\n");
//fclose($file);

$servername = "localhost";
$username = "958107";
$password = "123321qw";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$date = date('H:i:s d.m.Y');
$agent = urldecode($_GET["agent"]);
$ip = urldecode($_GET["ip"]);
$page = urldecode($_GET["page"]);
$sql = "INSERT INTO `958107`.`statistic` (`count`, `date`, `agent`, `ip`, `page`) VALUES (NULL, '$date', '$agent', '$ip', '$page')";
$conn->query($sql);

echo "success";