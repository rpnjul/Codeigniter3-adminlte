<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('logins','pegawai_model');
    }
    public function index()
    {
		// Content
		$this->load->view('auth/login');
		//end content
    }

	public function post()
	{	
		var_dump($this->input->post());
		$username = $this->input->post('username',TRUE);
		$password = md5($this->input->post('password',TRUE));
		$validate = $this->logins->validate($username,$password);
		if($validate->num_rows() > 0){
			$data  = $validate->row_array();
			$name  = $data['username'];
			$level = $data['level'];
			$pegawai = $this->pegawai_model->find($data['pegawai_id'])??null;
			$session = array(
				'pegawai'	=> $pegawai,
				'username'  => $name,
				'level'     => $level,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($session);
		}else{
			return redirect('login');
		}
	}
}
        
    /* End of file  Login.php */
        
                            