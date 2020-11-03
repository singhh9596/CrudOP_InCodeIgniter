<?php

class User_model extends CI_Model{

    function create($formArray){
        $this->db->insert('users', $formArray); //insert into users table
    }
    function all(){
        return $users = $this->db->get('users')->result_array();    //select all users
    }

    function getUser($userId){
        $this->db->where('user_id',$userId);
       return $user = $this->db->get('users')->row_array(); //select * from users where user_id= ''
    }

    function updateUser($userId, $formsArray){
        $this->db->where('user_id',$userId);
        $this->db->update('users',$formsArray);     //update users SET name = '', email='' where user_id=''
    }

    function deleteUser($userId){
        $this->db->where('user_id', $userId);
        $this->db->delete('users'); //delete from users where user_id=''
    }
}

?>