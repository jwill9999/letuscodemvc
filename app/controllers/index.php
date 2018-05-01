<?php
  class Index extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Index Page',
      ];
     
      $this->view('index', $data);
    }

  }