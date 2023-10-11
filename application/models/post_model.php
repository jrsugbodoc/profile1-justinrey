<?php 

class Post_model extends CI_Model{


    public function get_posts(){

        $this->db->select('post.*, users.first_name, users.last_name'); // Select the fields you need
        $this->db->from('post');
        $this->db->join('users', 'post.user_post_id = users.id', 'left'); // Join posts with users
        $query = $this->db->get();

    return $query->result();
    

    }

    public function display_postinfo($post_id){
        $this->db->select('users.first_name, users.last_name');
        $this->db->from('post');
        $this->db->join('users', 'post.user_post_id = users.id', 'left');
        $this->db->where('post_id', $post_id);
        $query = $this->db->get();

        //Checks if there is available user 
    if ($query->num_rows() > 0) {
        $result = $query->row();

        //returns the first name and last name
        return $result->first_name . ' ' . $result->last_name;
        
        }
    }
    
    public function get_posts_info($post_id){

        $this->db->where('post_id', $post_id);

        $get_data = $this->db->get('post');

        return $get_data->row();

    }
    public function get_post($id){
        
        $this->db->where('post_id', $id);
        $query = $this->db->get('post');
        
        return $query->row();

    }

    public function create_post($data){
        $insert_query = $this->db->insert('post',$data);
        return $insert_query;
    }

    public function edit_post($post_id, $data){

        $this->db->where('post_id', $post_id);
        $this->db->update('post', $data);

        return true;
    }

    public function delete_post($post_id){

        $this->db->where('post_id', $post_id);
        $this->db->delete('post');
    
    }

}

?>