<?php

class Home extends CI_Controller {

    
    // public function index(){

    // // Load the necessary helpers and model
    // $this->load->helper('youtube');
    // $this->load->helper('timesince');
    // $this->load->model('post_model');
    
    // // Get the posts from the model
    // $data['post'] = $this->post_model->get_posts();

    // // Define the comparePosts function
    // function comparePosts($a, $b) {
    //     return strtotime($b->time_posted) - strtotime($a->time_posted);
    // }

    // // Sort the $data['post'] array using the custom comparison function
    // usort($data['post'], 'comparePosts');

    // // Set the main view and load the layout view
    // $data['main_view'] = "profile-2";
    // $this->load->view('layouts/main', $data);
        
    // }
    public function index(){
        
        redirect ('home/login1');
    }

    public function login1(){

        $data['login1_view'] = "login-1";

        $this->load->view('layouts/custom_main', $data);
    }
    public function register1(){

        $data['login1_view'] = "register-1";

        $this->load->view('layouts/custom_main', $data);
    }
}
?>