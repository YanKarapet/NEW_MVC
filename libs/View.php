<?php


class View{

    public static function render($name,$data=[]){
        extract($data);
        require_once 'app/views/'.$name.'.php';
    }


}