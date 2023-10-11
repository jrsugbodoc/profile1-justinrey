<?php

class Post extends CI_Controller {

    public function __construct(){
        parent::__construct();

            // Redirect to login if user not logged in
            if(!$this->session->userdata('logged_in')){
                redirect('home/login1');
            }
        }

    public function index(){

        // Gets youtube helper function
        $this->load->helper('youtube');

        // Gets timesince helper function
        $this->load->helper('timesince');
        
        // Get the posts from the model
        $data['post'] = $this->post_model->get_posts();
    
        // Define the comparePosts function
        function comparePosts($a, $b) {
            return strtotime($b->time_posted) - strtotime($a->time_posted);
        }
    
        // Sort the $data['post'] array using the comparison function
        usort($data['post'], 'comparePosts');
    
        // Set the main view and load the layout view
        $data['main_view'] = "profile-2";
        $this->load->view('layouts/main', $data);
            
        }
    
        public function create() {
            $this->form_validation->set_rules('content', 'Content', 'trim');
            $this->form_validation->set_rules('check_non_empty', 'Check Non-Empty', 'callback_check_non_empty');
            $this->form_validation->set_rules('link', 'Link', 'trim|callback_valid_youtube_link');
        
            if ($this->form_validation->run() == FALSE) {
                // Form validation failed
                $data['validation_errors'] = validation_errors(); // Get validation errors
                $this->output
                     ->set_content_type('application/json')
                     ->set_output(json_encode($data)); // Return errors as JSON
            } else {
                // Validation passed
                $category = empty($this->input->post('link')) ? 'text' : 'video';
        
                $data = array(
                    'user_post_id'  => $this->session->userdata('user_id'),
                    'content'       => $this->input->post('content'),
                    'link'          => $this->input->post('link'),
                    'category'      => $category,
                    'time_posted'   => gmdate('Y-m-d h:i:s')
                );
        
                if ($this->post_model->create_post($data)) {
                    $response = array('success' => true);
                    $this->output
                         ->set_content_type('application/json')
                         ->set_output(json_encode($response)); // Return success as JSON
                }
            }
        }
    
    public function check_non_empty() {
        $content = $this->input->post('content');
        $link = $this->input->post('link');
        
        // Check if both content and link are empty
        if (empty($content) && empty($link)) {
            $this->form_validation->set_message('check_non_empty', 'At least one of Content and Link must not be empty.');
            return FALSE;
        }
        
        return TRUE;
    }
    public function valid_youtube_link($link) {
        // Use a regular expression to validate the YouTube link format
        
        if (empty($link)) {
            return TRUE;
        }
        
        $pattern = '/^(https:\/\/)?(www\.)?(youtube\.com\/watch\?v=|youtu\.be\/)[a-zA-Z0-9_-]+$/';
        if (preg_match($pattern, $link)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('valid_youtube_link', 'The Link field should contain a valid YouTube link.');
            return FALSE;
        }
    }

    public function edit($post_id){
        
        $this->form_validation->set_rules('content', 'Content', 'trim');
        $this->form_validation->set_rules('check_non_empty', 'Check Non-Empty', 'callback_check_non_empty');
        $this->form_validation->set_rules('link', 'Link', 'trim|callback_valid_youtube_link');

        // Checks if form validation failed 
        if($this->form_validation->run()== FALSE){

            //Gets the data of the passed post id
            $data['post_data'] = $this->post_model->get_posts_info($post_id);

            $data['main_view'] = 'posts/edit_post';
            $this->load->view('layouts/main', $data);
        }else{
            $category = empty($this->input->post('link')) ? 'text' : 'video';

            $data = array(
                'content'       => $this->input->post('content'),
                'link'          => $this->input->post('link'),
                'category'      => $category
            );

            // Update the post
            if($this->post_model->edit_post($post_id,$data)){
 
                redirect("post/display/" . $post_id);
            }
        }
    }

    public function display($post_id){
        $this->load->helper('youtube');

        //Stores this session user id
        $logged_in_user_id = $this->session->userdata('user_id');

        $data['post_data'] = $this->post_model->get_post($post_id);
        $data['post_name'] = $this->post_model->display_postinfo($post_id); // Get the author's name

        // Checks if the logged in user mataches with user id in the post 
        if ($data['post_data']->user_post_id == $logged_in_user_id) {
            
            $data['allow_edit_delete'] = true;
        } else {
            
            $data['allow_edit_delete'] = false;
        }

        $data['main_view'] = "posts/display";

    $this->load->view('layouts/main', $data);

    }

    public function delete($post_id){

        // Delete the data of the post
        $this->post_model->delete_post($post_id);
        redirect("post/index");
    }



}