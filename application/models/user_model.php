<?php

class User_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_users()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    function add_user($user_data){
        $this->db->insert('users', $user_data);
    }

    function update_user($user, $id)
    {
        $this->db->update('users', $user, array('id' => $id) );
    }

    function delete($id){
        $this->db->delete('users', array('id' => $id) );
    }
}