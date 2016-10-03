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
<html lang="ru">
<head>
    <link rel="SHORTCUT ICON" href="static/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" sizes="196x196" href="apple-touch-icon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title>little-star.su Детские игровые площадки</title>
    <!--    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>-->
    <style type="text/css">
        div, html, body, span, object, iframe, h1, h2, h3, h4, h5, h6, a, p, blockquote, pre, abbr, address, cite, code, del, dfn, em, img, ins, kbd, q, samp, small, strong, sub, var, b, i, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, figcaption, figure, footer, header, menu, nav, section, summary, time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
            border-spacing: 0;
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
            background-image: url("static/new/top_panel.png");
            background-repeat: repeat-x;
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
        h1 {
            font-size: 150%;
            color: #1a1c80;
        }
        body {
            font-size: 120%;
        }

        .content_back {
            width:85%;
            margin-left: auto;
            margin-right: auto;

            border: 50px solid transparent;
            -webkit-border-image: url(static/new/border.png);
            -webkit-border-image-repeat:round;
            -webkit-border-image-slice:100 100 100 100 fill;
            -o-border-image: url(static/new/border.png);
            -o-border-image-repeat:round;
            -o-border-image-slice:100 100 100 100 fill;
            border-image: url(static/new/border.png);
            border-image-repeat:round;
            border-image-slice:100 100 100 100 fill;
        }
        .top td:nth-child(1), {
            width: 31.5%;
        }
        .top td:nth-child(2) {
            width: 68.5%;
        }
        .phone :link { color:#ffffff; }
        .phone :visited { color:#ffffff; }
        .phone :hover { color:#ffffff; }
        .phone :active { color:#ffffff; }
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
<div style="background-image: url('static/new/middle.png'); background-size: contain;">
    <div style="position: fixed; z-index: 10">
        <div class="button_container">
            <a class="btn" href="?page=about">
                <img src="static/new/text/about.png" class="not_selected" style="width: 9.9%">
                <img src="static/new/text/about_selected.png" class="selected" style="width: 9.9%">
            </a>
            <img src="static/new/text/separator.png" style="width: 0.6%"/>
            <a class="btn" href="?page=places">
                <img src="static/new/text/places.png" class="not_selected" style="width: 18.3%"/>
                <img src="static/new/text/places_selected.png" class="selected" style="width: 18.3%"/>
            </a>
            <img src="static/new/text/separator.png" style="width: 0.6%"/>
            <a class="btn" href="?page=birthday">
                <img src="static/new/text/birthday.png" class="not_selected" style="width: 27.1%"/>
                <img src="static/new/text/birthday_selected.png" class="selected" style="width: 27.1%"/>
            </a>
            <img src="static/new/text/separator.png" style="width: 0.6%"/>
            <a class="btn" href="?page=partner">
                <img src="static/new/text/partner.png" class="not_selected" style="width: 19.7%"/>
                <img src="static/new/text/partner_selected.png" class="selected" style="width: 19.7%"/>
            </a>
            <img src="static/new/text/separator.png" style="width: 0.6%"/>
            <a class="btn" href="?page=contacts">
                <img src="static/new/text/contact.png" class="not_selected" style="width: 16.1%"/>
                <img src="static/new/text/contact_selected.png" class="selected" style="width: 16.1%"/>
            </a>
        </div>
    </div>
    <div align="center" style="width: 100%;">
        <table style="width: 100%; line-height: 0" class="top">
            <tr>
                <td style="background-image: url('static/new/top_1_1.png'); background-size: 100.3%; vertical-align: middle; text-align: center">
                    <a href="?page=main"><img src="static/new/animation.gif" style="width: 80%"/></a>
                </td>
                <td><img src="static/new/top_1_2.jpg" style="width: 100%"/></td>
            </tr>
            <tr>
                <td style="background-image: url('static/new/top_2_1.png'); background-size: 100.3%; vertical-align: middle; text-align: center">
                    <div class="phone" style="font-size: xx-large; color: white; line-height: normal">
                        <b >+7 (977) 822-11-21</b>
                    </div>

                </td>
                <td><img src="static/new/top_2_2.jpg" style="width: 100%"/></td>
            </tr>
        </table>
    </div>
    <div align="center" class="content_back">
        <div style="width: 100%; height: 100%; min-height: 500px">
            <?php
            switch(getRequestParam("page", null)) {
                case "news":
                    require_once "news.php";
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
                case "about":
                    require_once "about.php";
                    break;
                default:
//                    $file = fopen("visit.txt", "a+");
//                    date_default_timezone_set("Europe/Moscow");
//                    fwrite($file, date('H:i:s d.m.Y')."   ". $_SERVER['HTTP_USER_AGENT']. "  IP:".getenv('REMOTE_ADDR')."\n");
//                    fclose($file);
                case "main":
                    require_once "main.php";
                    break;
            }
            ?>

        </div>
    </div>
</div>

<div>
    <img style="width: 100%" src="static/new/background_bottom.jpg"/>
</div>

<!--<div style="position: absolute; top: 0; left: 0;">-->
<!--    <table>-->
<!--        <tr>-->
<!--            <td><img src="static/call_us.png" style="width: 60px; height: 60px"/></td>-->
<!--            <td style="vertical-align: middle; font-size: 16pt">  +7 (977) 822-11-21</td>-->
<!--        </tr>-->
<!--    </table>-->
<!--</div>-->

</body>
</html>