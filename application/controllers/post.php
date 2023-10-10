<?php

class Post extends CI_Controller {


    public function __construct(){
        parent::__construct();


    
            if(!$this->session->userdata('logged_in')){
    
                redirect('home/login1');
            }
        }

    public function index(){

        $this->load->helper('youtube');
        $this->load->helper('timesince');
        $this->load->model('post_model');
        
        // Get the posts from the model
        $data['post'] = $this->post_model->get_posts();
    
        // Define the comparePosts function
        function comparePosts($a, $b) {
            return strtotime($b->time_posted) - strtotime($a->time_posted);
        }
    
        // Sort the $data['post'] array using the custom comparison function
        usort($data['post'], 'comparePosts');
    
        // Set the main view and load the layout view
        $data['main_view'] = "profile-2";
        $this->load->view('layouts/main', $data);
            
        }
    

    public function create(){

        $this->form_validation->set_rules('content','Content','trim|required');

        if($this->form_validation->run()== FALSE){

            $data['main_view'] = 'posts/create_post';
            $this->load->view('layouts/main', $data);
        }else{

            $data = array(
                'user_post_id' => $this->session->userdata('user_id'),
                'content' => $this->input->post('content'),
                'time_posted' => gmdate('Y-m-d h:i:s')
            );

            if($this->post_model->create_post($data)){
                $this->session->set_flashdata('post_created','Post Created');

                redirect("post/index");
            }
        }
    }

    public function edit($post_id){
        
        $this->form_validation->set_rules('content','Content','trim|required');

        if($this->form_validation->run()== FALSE){

            $data['post_data'] = $this->post_model->get_posts_info($post_id);

            $data['main_view'] = 'posts/edit_post';
            $this->load->view('layouts/main', $data);
        }else{

            $data = array(
                'content' => $this->input->post('content')
            );

            if($this->post_model->edit_post($post_id,$data)){
                $this->session->set_flashdata('post_updated','Post Updated');

                redirect("post/display/" . $post_id);
            }
        }
    }

    public function display($post_id){
        $this->load->helper('youtube');

        $logged_in_user_id = $this->session->userdata('user_id');

        $data['post_data'] = $this->post_model->get_post($post_id);
        $data['post_name'] = $this->post_model->display_postinfo($post_id); // Get the author's name

        if ($data['post_data']->user_post_id == $logged_in_user_id) {
            // Allow editing and deleting
            $data['allow_edit_delete'] = true;
        } else {
            // Restrict editing and deleting
            $data['allow_edit_delete'] = false;
        }
        $data['main_view'] = "posts/display";

    $this->load->view('layouts/main', $data);

    }

    public function delete($post_id){

        $this->post_model->delete_post($post_id);
        $this->session->set_flashdata('post_deleted','Post Deleted');

        redirect("post/index");
    }



}