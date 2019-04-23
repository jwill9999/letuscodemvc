<?php

class Index extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Index Page'
        ];

        $this->view('index', $data);
    }
}