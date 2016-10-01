<?php
    date_default_timezone_set("Europe/Moscow");
    date('H:i:s d.m.Y');
if(file_exists("visit.txt")) {
    echo "Всего посещений: ".(sizeof(file("visit.txt")));
    echo readfile("visit.txt");
}
