<?php


    class Users extends CI_Controller {


    //     public function show($user_id){
    //         // $this->load->model('user_model');


    //     $data['results'] = $this->user_model->get_users($user_id);

        

    //     $this->load->view('user_view',$data);

    //     // foreach ($result as $object){
    //     //     echo $object->username . "<br>";
    //     // }
    // }

    // public function insert(){
    //     $username = "peter";
    //     $password = "pan";
    //     $this->user_model->create_users([
    //         'username' => $username,
    //         'password' => $password

    //     ]);
    // }

    // public function update(){
    //     $id = 3;
        
    //     $username = "uncle";
    //     $password = "ben";

    //     $this->user_model->update_users([
    //         'username' => $username,
    //         'password' => $password

    //     ],$id);
    // }

    // public function delete(){
    //     $id = 4;
    //     $this->user_model->delete_users($id);
    // }


    public function register(){
        
        $this->form_validation->set_rules('first_name','First Name','trim|required|min_length[3]');
        $this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[3]');
        $this->form_validation->set_rules('email','Email','trim|required|min_length[3]');
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[3]|matches[password]');
        
        if($this->form_validation->run()== FALSE){

           
            $data['main_view'] = 'users/register_view';
            $this->load->view('layouts/main', $data);

        }else{
             // redirect ('http://google.com');
        }
       

    }

    public function login(){
        
        
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
        // $this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[3]|matches[password]');

        if ($this->form_validation->run() == FALSE) {

            $data = array(
                
                'errors' => validation_errors()
                
                );

            $this->session->set_flashdata($data);

            redirect('home/login1');
        
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->user_model->login_user($username, $password);

            if ($user_id) {
                // Fetch additional user information from the database
                $user_info = $this->user_model->get_user_info($user_id);

                if ($user_info) {
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'first_name' => $user_info->first_name, // Assuming these columns exist in your database
                        'last_name' => $user_info->last_name,
                        'email' => $user_info->email,
                        'logged_in' => true
                    );
                }
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success','You are now logged in');
                // redirect ('home/index');

                $data['main_view'] = "profile-2";
                $this->load->view('layouts/main', $data);
            }else{
                
                $this->session->set_flashdata('login_failed','Sorry you are not logged in');
                redirect('home/login1');
            }

        }
        
        
        // echo $this->input->post('username');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect ('home/login1');
    }

}
?>