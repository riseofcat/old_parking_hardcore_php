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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title>little-star.su</title>
<!--    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>-->
    <style type="text/css">
        div, html, body, span, object, iframe, h1, h2, h3, h4, h5, h6, a, p, blockquote, pre, abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp, small, strong, sub, var, b, i, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, figcaption, figure, footer, header, menu, nav, section, summary, time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            /*background: transparent;*/
        }
        html {
            height: 100%;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .button_container {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;/*for internet explorer*/
        }
        .btn {
            text-decoration: none;
        }
        .selected {
            display: none;
        }
        .btn:hover .selected {
            display: inline;
        }
        .btn:focus .selected {
            display: inline;
        }
        .btn:hover .not_selected {
            display: none;
        }
        .btn:focus .not_selected {
            display: none;
        }
        ul {
            list-style-image: url('static/list_star.png');
        }
    </style>
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
<!--    https://vk.com/dev/Community?height=400&link=http%3A%2F%2Fvk.com%2Fpublic20003922&mode=0&oid=-20003922&wide=&width=220-->
    <script>
//        VK.Widgets.Group("vk_groups", {mode: 2, width: "auto", height: "300", wide: 1}, 102947277);
//        VK.init({apiId: 5179166, onlyWidgets: true});
//        VK.Widgets.Like("vk_like", {type: "button"});
    </script>
</head>
<body>
<div style="background-image: url('static/background_scale.jpg'); background-size: contain;">
    <div id="top" align="center" style="width: 100%;"><img src="static/big_logo.png" style="height: 150px"/></div>
    <div class="button_container" id="button_bar">
        <a class="btn" href="?page=main">
            <img src="static/about.png" class="not_selected">
            <img src="static/about_selected.png" class="selected">
        </a>
        <a class="btn" href="?page=places">
            <img src="static/places.png" class="not_selected"/>
            <img src="static/places_selected.png" class="selected"/>
        </a>
        <a class="btn" href="?page=birthday">
            <img src="static/birthday.png" class="not_selected"/>
            <img src="static/birthday_selected.png" class="selected"/>
        </a>
        <a class="btn" href="?page=partner">
            <img src="static/partner.png" class="not_selected"/>
            <img src="static/partner_selected.png" class="selected"/>
        </a>
        <a class="btn" href="?page=contacts">
            <img src="static/contacts.png" class="not_selected"/>
            <img src="static/contacts_selected.png" class="selected"/>
        </a>
    </div>

    <div align="center" style="width:700px; min-height: 500px; margin-left: auto; margin-right: auto">
        <?php
        switch(getRequestParam("page", "main")) {
            case "main":
                require_once "main.php";
                break;
            case "places":
                require_once "places.php";
                break;
            case "birthday":
                require_once "birthday.php";
                break;
            case "partner":
                require_once "partner.php";
                break;
            case "contacts":
                require_once "contacts.php";
                break;
        }
        ?>
    </div>
</div>

<div>
    <img style="width: 100%" src="static/background_bottom.jpg"/>
</div>

<div style="position: fixed; top: 0; right: 0;">
    <a href="//vk.com/littlestarkids" target="_blank">
        <img src="static/vk_top_right.png" style="width: 80px; height: 80px"/>
    </a>
</div>
<div style="position: fixed; top: 0; left: 0;">
    <table>
        <tr>
            <td><img src="static/call_us.png" style="width: 80px; height: 80px"/></td>
            <td style="vertical-align: middle; font-size: 20pt">  +7 (977) 822-11-21</td>
        </tr>
    </table>
</div>

</body>
</html>