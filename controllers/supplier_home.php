<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Supplier_home extends CI_Controller 
{
 
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{

		if($this->session->userdata('logged_in'))
		{

	   		$session_data = $this->session->userdata('logged_in');

	   		$data['user_type'] = $session_data['user_type'];

	   		$session_check = $session_data['user_type'];

	   		if ($session_check== 'supplier')
	   		{
	   			$session_data = $this->session->userdata('logged_in');
	   			$data['username'] = $session_data['username'];

		   		$this->load->model("get_list");
				
				$data['title'] = "Supplier Home"; 
	   			$this->load->view("supplier_home_view", $data);
	   		}

	   		else if ($session_check == 'admin')
	   		{
	   			redirect('home', 'refresh');
	   		} 
	   		

	   		else if ($session_check == 'secretary')
	   		{
	   			redirect('secretary_home', 'refresh');
	   		}

	   }
	   else
	   {
		 //If no session, redirect to login page
		 redirect('login', 'refresh');
	   }
	} 
 
}
 
?>