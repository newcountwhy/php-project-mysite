<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here 
 class Personal_update_model extends CI_Model{

    function getUserByIUsername(){
        $this->db->select('*');
        $this->db->where('username', 'janet');
        $q = $this->db->get('users');
        $result = $q->result();
        return $result;
    }

    function updateUser($user_id, $username, $email,$description){
        $data=array(
            'username' =>$username,
            'email'=>$email,
            'description'=>$description,
        );
        $this->db->where('id',$user_id);
        return $this->db->update('users',$data);
        // if($update_info !='' ){
          //     $this->db->update('users')->set('description',$update_info)->where('username','janet');
            
        }

    }
    
    
   
 }
