<?php
switch(getRequestParam("place", null)) {
    case "columbus":
        require_once "place_columbus.php";
        break;
    case "aviapark":
        require_once "place_aviapark.php";
        break;
    case "schuka":
        require_once "place_schuka.php";
        break;
    case "rivera":
        require_once "place_rivera.php";
        break;
    case "serpu":
        require_once "serpu.php";
        break;
    default:
        require_once "all_places.php";
}
