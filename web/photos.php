<?php
function getRequestParam($name, $default) {
    if (isset($_GET[$name]) && strlen(trim($_GET[$name])) > 0) {
        return trim($_GET [$name]);
    }
    if (isset($_POST[$name]) && strlen(trim(urldecode($_POST[$name]))) > 0) {
        return trim($_POST [$name]);
    }
    return $default;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Columbus</title>
</head>
<body style="text-align: center">
<a href='index.php?page=places&place=<?php echo getRequestParam("place", "");?>#photos'>
    <img style="width: 100%" src='static/new/<?php echo getRequestParam("place", "");?>/<?php echo getRequestParam("photo", "");?>'/>
    <br/>
    <h1>Назад ко всем фотографиям</h1>
    <br/>
    <img src='static/<?php echo getRequestParam("place", "");?>1.png' style="width: 30%"/>
</a>

</body>
</html>
