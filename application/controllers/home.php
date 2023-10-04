<?php

class Home extends CI_Controller {

    public function index(){

        $data['main_view'] = "profile-2";

        $this->load->view('layouts/main', $data);
        
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