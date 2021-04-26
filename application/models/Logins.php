<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Logins extends CI_Model 
{
    function validate($email,$password){
		$this->db->where('username',$email);
		$this->db->where('username',$password);
		$result = $this->db->get('users',1);
		return $result;
	}                   
                        
}
                        
/* End of file Logins.php */
    
                        