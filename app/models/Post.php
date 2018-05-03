<?php
class Post
{
    protected static $db;

    public function __construct()
    {
        self::$db = new Database;
    }

    public function findAll()
    {
        // pass query to PDO
        self::$db->query("SELECT * FROM Posts");

        // using prepared statement find all posts
        // and return to controller
        return self::$db->fetchAll();
    }

    public function findOne($id)
    {
        // pass query to PDO
        self::$db->query("SELECT * FROM Posts WHERE id =  $id ");

        // using prepared statement find One post
        // and return to controller
        return self::$db->findOne();
    }
}
