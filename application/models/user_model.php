<?php

class User_model extends CI_Model{

    // public function get_users($user_id){

        // $this->db->where([
        //     'id' => $user_id,
        //     // 'username' => $username
        
        // ]);
        // $query = $this->db->get('users');

        // return $query->result();

        // $this->db->where('id', $user_id);
        // $query = $this->db->query("SELECT * FROM users");

        // return $query->num_rows();
        
        // $config['hostname'] = "localhost";
        // $config['username'] = "root";
        // $config['password'] = "";
        // $config['database'] = "errand_db";

        // $connection = $this->load->database($config);
    // }



    // public function create_users($data){

    //     $this->db->insert('users', $data);
    // }

    // public function update_users($data,$id){

    //     $this->db->where(['id' => $id]);
    //     $this->db->update('users', $data);
    // }

    // public function delete_users($id){

    //     $this->db->where(['id' => $id]);
    //     $this->db->delete('users');
    // }


    public function create_user(){

        // $options = ['cost'=>12];

        // $encrypted_pass = password_hash($this->input->post('password'),PASSWORD_BCRYPT,$options);

        $data = array(

            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            // 'password' => $encrypted_pass

        );

        $insert_data = $this->db->insert('users', $data);

        return $insert_data;
    }


    public function login_user($username, $password){

        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('users');

        if ($result->num_rows()==1){
            return $result->row(0)->id;
        }else{
            return false;
        }
    }

    public function get_user_info($user_id) {
        // Fetch user information from the database based on user_id
        $this->db->where('id', $user_id);
        $query = $this->db->get('users'); // Assuming 'users' is your table name

        if ($query->num_rows() == 1) {
            return $query->row(); // Return a single row of user data
        } else {
            return false; // User not found
        }
    }

   
}

?>