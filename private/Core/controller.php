<?php

class Controller
{

    //Load Models
    public function load_model($model)
    {
        if (file_exists("../private/Models/".ucfirst($model).".php")) {
            require("../private/Models/".ucfirst($model).".php");
            return $model = new $model();
        }

        return false;
    }


    //Redirect to another page
    public function redirect($link)
    {
        header("Location: ". ROOT .trim($link, "/"));
        die;
    }



    protected function view($view, $data = [])
    {
        extract($data);

        if (file_exists("../private/views/". $view .".php")) {
            include "../private/views/". $view .".php";
        } else {
            include "../private/views/404.php";
        }
    }


    protected function loadModel($model)
    {
        extract($data);

        if (file_exists("../private/models/". $model .".php")) {
            include "../private/models/". $model .".php";
            return $model = new $model();
        }

        return false;
    }
}