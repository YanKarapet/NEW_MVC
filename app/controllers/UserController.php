<?php


class UserController extends Controller {

    public function login(){
        $this->view('user/login');
    }

    public function register(){
        $this->view('user/register');
    }

    public function check(){
        $user = new User;
        if ($user->login()){
            $this->redirect('/index');
        }else{
//            self::redirect('/user/login');
        }

    }


}