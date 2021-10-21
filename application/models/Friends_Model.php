<?php
class Friends_Model extends CI_Model 
{
	function saverecords($username,$email,$description)
	{
	$query="insert into friends values('','$username','$email','$description')";
	$this->db->query($query);
	}
	
	function displayrecords()
	{
	$query=$this->db->query("select * from friends");
	return $query->result();
	}
	
	function deleterecords($id)
	{
	$this->db->query("delete  from friends where id='".$id."'");
	}
	
	function displayrecordsById($id)
	{
	$query=$this->db->query("select * from friends where id='".$id."'");
	return $query->result();
	}
	
	function updaterecords($username,$email,$description,$id)
	{
	$query=$this->db->query("update friends SET username='$username',email='$email',description='$description' where id='".$id."'");
	}	
}
?>