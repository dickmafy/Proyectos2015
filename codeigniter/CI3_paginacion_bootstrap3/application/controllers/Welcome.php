<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

     public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('grocery_CRUD');
    
	
  }
  
    
	public function index() {
        $this->load->model('Blog');

        // Load all of the logged-in user's posts
        $posts = $this->Blog->getPosts();

        // If posts were fetched from the database, assign them to $data
        // so they can be passed into the view.
        if ($posts) {
            $data['posts'] = $posts;
        }
        $data['is_admin'] = 'Diego Matos';
        $this->load->view('welcome_message', $data);
    }

}
