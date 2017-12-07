<?php

class  Route{



    public function __construct(){

        $url = rtrim($_GET['url']);
        $url = explode('/',$url);

        $ucURL = ucfirst($url[0]);
        $newURL = $ucURL."Controller";


        if (!empty($url[0])) {

            if (!file_exists('app/controllers/' . $url[0] .'Controller'. '.php')){
                header('Location:/');
            }
            elseif (isset($url[1])) {
                $controller = new $newURL;
                $str = (string)$url[1];
                $controller->$str();
            }
            else {
                $controller = new $newURL;
            }
        }else{
            $controller = new Controller;
            $controller->index();


        }
    }



}

