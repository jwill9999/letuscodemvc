<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'http://letuscodemvc/pages',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'http://letuscodemvc/pages/about'
      ];

      $this->view('pages/about', $data);
    }
  }