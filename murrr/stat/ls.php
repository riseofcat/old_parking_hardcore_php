<?php
$file = fopen("visit.txt", "a+");
date_default_timezone_set("Europe/Moscow");
fwrite($file, date('H:i:s d.m.Y') . "  " . $_POST["agent"] . "  " . $_POST["ip"]);
fclose($file);
?>