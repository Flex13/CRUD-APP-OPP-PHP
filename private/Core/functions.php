<?php

function show($stuff)
{
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

//Sanitize values
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    return $data;
}

function get_var($key, $default = "")
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return $default;
}

function get_select($key, $value)
{
    if (isset($_POST[$key])) {
        if ($_POST[$key] == $value) {
            return "selected";
        }
    }

    return "";
}

function random_string($length)
{
    $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $text = "";

    for ($x = 0; $x < $length; $x++) {
        $random = rand(0, 61);
        $text .= $array[$random];
    }

    return $text;
}


function get_date($date)
{
    return date("jS M, Y", strtotime($date));
}



function esc($var)
{
    return htmlspecialchars($var);
}

function views_path($view)
{
    if (file_exists("../private/views/dashboard/" . $view . ".php")) {
        return ("../private/views/dashboard/" . $view . ".php");
    } else {
        return ("../private/views/404.php");
    }
}

function views_models($view)
{
    if (file_exists("../private/views/main/models/" . $view . ".php")) {
        return ("../private/views/main/models/" . $view . ".php");
    } else {
        return ("../private/views/404.php");
    }
}