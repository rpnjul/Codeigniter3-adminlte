<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Pegawai_model extends CI_Model 
{
    function find($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('pegawai',1);
	}                  
                        
}
                        
/* End of file Pegawai_model.php */
    
                        