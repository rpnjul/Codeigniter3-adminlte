<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/content');
		$this->load->view('templates/footer');
    }
}
        
    /* End of file  Controller.php */
        
                            