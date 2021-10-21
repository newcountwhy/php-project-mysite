<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 //put your code here 
 class Search_car_model extends CI_Model{
    // Log in
    public function count(){
        // Validate
        $query=$this->db->query("SELECT COUNT(*)FROM cars_details");
        return $query->row();
    }
    public function sortby($keyword, $order){
        
    }
 }
