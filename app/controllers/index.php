<?php
  class Index extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'http://letuscodemvc/',
      ];
     
      Controller::getView('index', $data);
    }

  }