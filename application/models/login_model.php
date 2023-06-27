<?php
	class Login_model extends CI_Model{

		function login ($user,$pass){
			return $this->db->where(['name' => $user,'password'=>$pass])->get('login');
		}

	
	}
?>