<?php
class Pages extends Controllers {
    //eikhane amr software er jotogula page ase shob gula call korbo 
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $this->view('pages/index');
       
    }
   public function about(){
        $this->view('pages/about');
    }
    public function eligibility(){
        $this->view('pages/eligibility');
    }
    public function login(){
        $this->view('pages/login');
    }
    public function reg(){
        $this->view('pages/reg');
    }
    public function contacts(){
        $this->view('includes/contacts');
    }
}