<?php


require "../private/Core/config.php";
require "../private/Core/functions.php";
require "../private/core/controller.php";
require "../private/core/app.php";


//Auto load Class if Code does not Find Class in Models
spl_autoload_register(function ($class_name) {
    require "../private/models/" . ucfirst($class_name) . ".php";
});