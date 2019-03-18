<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 session_start();
class Food_detail extends CI_Controller 
{
 
	function __construct()
	{
	   parent::__construct();
	}

	function index()
	{
		if ($this->session->userdata('logged_in')) {

		 	$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];

			$this->load->model("get_list");
			$data['results'] = $this->get_list->getfoodstocklist();

		 	$data['title'] = "Food Detail"; 
	     	$this->load->view('food_detail_view', $data);
	 	}
	 	else{

	 		//if no session redirect to login page
	 		redirect('login', 'refresh');
	 	}
	}
}

?>