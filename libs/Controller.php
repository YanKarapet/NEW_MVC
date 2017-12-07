<?php


class Controller
{


    public function index(){

        $this->view('home/index',['title' => 'hello this is home index']);
    }

    public  function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }

    public function view($path,$arg=[]){

        View::render($path,$arg);
    }

    public function __call($name, $arguments){
        header('Location:/');
    }
}