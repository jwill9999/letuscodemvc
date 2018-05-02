<?php
  class Pages extends Controller {
    public function __construct(){
       // use model 
       $this->posts = $this->model('post');
    }
    
    public function index(){
      $posts = $this->posts->getPosts();
      $data = [
        'title' => 'http://letuscodemvc/pages',
        'posts' => $posts,
      ];
     
      Controller::getView('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'http://letuscodemvc/pages/about'
      ];

      Controller::getView('pages/about', $data);
    }
  }