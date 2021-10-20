<?php
class Post {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllPosts() {
        $this->db->query('SELECT * FROM reg ORDER BY id ASC');

        $results = $this->db->resultSet();

        return $results;
    }
}