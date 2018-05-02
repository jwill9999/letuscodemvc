<?php
  class Index extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Home Page',
      ];
     
      Controller::getView('index', $data);
    }

  }