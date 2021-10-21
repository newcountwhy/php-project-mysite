<?php

class My_review_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    

    public function review_search($keyword, $order){
        // --------------------------------
        // START WRITING YOUR OWN CODE HERE
        $username = get_cookie('username');
        //$this->db->select('*');
        //$this->db->from('review_list');
        //$this->db->where('username',$username);
        //$this->db->order_by('favorite_level');

        //$this->db->where('username',$username);
        //$result=$this->db->get('review_list');
        //$result=$this->db->order_by('favorite_level', $order);
       // $result=$this->db->like('product_name', $keyword);
        //$query=$this->db->query('SELECT * FROM review_list WHERE 'username' => $username')
        $query= $this->db->select('*')->from('review_list')->where('username','Janet')->order_by('favorite_level', $order)->like('product_name', $keyword);
       //$query = $this->db -> get_where('review_list', 'username'=>$username));
        //$result=$this->$query->getResult();
    
        //$query = $this->db->order_by('favorite_level', $order);
           
        //$query = $this->db->like('product_name', $keyword);
        //$result = $this->$query->getResultArray();
    
        // Uncomment the following line when you finished your Query builder
        return $query->get()->result();


    }



}