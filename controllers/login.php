<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller 
{
 
	function __construct()
	{
	   parent::__construct();
	}
	 
	function index()
	{
	   $this->load->helper(array('form'));
	   $data['title'] = "Login"; 
	   $this->load->view('login_view', $data);
	}
	
	function logout()
		{
		   $this->session->unset_userdata('logged_in');
		   $this->session->sess_destroy();
		   redirect('home', 'refresh');
		}
 
}
 
?>