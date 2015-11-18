<?php
/**
* 
*/
class Login extends CI_Model
{
	
	function user($user,$pwd)
	{
		
	 $query=$this->db->get_where('user_play',array('user_id'=>$user));
	 

	 if($query->num_rows() == 1)
	 {
	 	return true;
	 }
	 else
	 {
	 	return false;
	 }
	}
}