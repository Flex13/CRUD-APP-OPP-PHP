<?php

class App
{
    private $controller = "home";
    private $method = "index";
    private $params = [];

    public function __construct()
    {
        //Split URL
        $url = $this->splitURL();


        //Get First Value from URL and check if exists. Replace the controller method Then remove from the array
        if (file_exists("../private/controllers/". strtolower($url[0]) .".php")) {
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }

        //if File exits then we must require it
        require "../private/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;

        //Check for Method inside the controller
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //run the class and method
        $this->params = array_values($url);
        call_user_func_array([$this->controller,$this->method], $this->params);
    }

    private function splitURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }
}