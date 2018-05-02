<?php
class Post 
{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getPosts()
    {
        // pass query to PDO
        $this->db->query("SELECT * FROM Posts");

        // using prepared statement fetch all data
        // and return to controller
        return $this->db->fetchAll();
    }
}