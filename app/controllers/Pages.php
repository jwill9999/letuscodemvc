<?php
  class Pages extends Controller {
    public function __construct(){
       // use model 
       $this->posts = $this->model('post');
    }
    
    public function index(){
      // using model get POSTS
      $posts = $this->posts->getPosts();

      // pass Post model data to $data object
      // pass it in associate array as posts key
      $data = [
        'title' => 'Welcome to Pages',
        'posts' => $posts,
      ];
     
      Controller::getView('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'Welcome to Pages About'
      ];

      Controller::getView('pages/about', $data);
    }
  }