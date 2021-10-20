<?php
class Posts extends Controllers {
    public function __construct() {
        $this->postModel = $this->model('Post');
    }

    public function index() {
        $posts = $this->postModel->findAllPosts();
        //var_dump($posts);
        $data = [
            'posts' => $posts
        ];

        $this->view('posts/index', $data);
    }
}