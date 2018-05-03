<?php
  class Pages extends Controller {
    public function __construct(){
       // use model 
       $this->posts = $this->model('post');
    }
    
    public function index(){
      // using model get POSTS
      $posts = $this->posts->findAll();
      

      // pass Post model data to $data object
      // pass it in associate array as posts key
      $data = [
        'title' => 'Welcome to Pages',
        'posts' => $posts,
      ];
     
      Controller::getView('pages/index', $data);
    }

    public function about(){
      $post = $this->posts->findOne('1');
      $data = [
        'title' => 'Welcome to Pages About',
        'post' => $post
      ];

      Controller::getView('pages/about', $data);
    }
  }