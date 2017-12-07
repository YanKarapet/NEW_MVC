<?php


class ShowController extends Controller {



//    public function __construct(){
//        parent::__construct();
//        $this->view->render('show/index',['good' => 'hello','good1' =>'hello1']);
//    }


    public function index(){
      $this->view('show/index',['good' => 'hello','good1' =>'hello1']);
    }



}