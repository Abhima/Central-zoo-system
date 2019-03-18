<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 session_start();
class Animal_detail extends CI_Controller 
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

	   		if ($session_check == 'admin')
	   		{
	   		
	   		
	   			$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
				
				$this->load->model("get_list");
				$data['results'] = $this->get_list->getanimalslist();
				
			 	$data['title'] = "Animal Detail"; 
		      	$this->load->view('animal_details_view', $data);
	   		}

	   		else if ($session_check == 'secretary')
	   		{
	   			redirect('secretary_home', 'refresh');
	   		}

	   		else if ($session_check == 'supplier')
	   		{
	   			redirect('supplier_home', 'refresh');
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