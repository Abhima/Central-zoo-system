<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Invoice_list extends CI_Controller 
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
		   		$supplierid = $session_data['username'];
				$data['displayinvoice'] = $this->get_list->invoicedisplaysup($supplierid);

				$data['title'] = "Invoice_list"; 
	   			$this->load->view("invoice_list_view_sup", $data);
	   		}

	   		else if ($session_check == 'admin')
	   		{
	   			redirect('home', 'refresh');
	   		} 
	   		

	   		else if ($session_check == 'secretary')
	   		{
	   			$session_data = $this->session->userdata('logged_in');
	   			$data['username'] = $session_data['username'];

		   		$this->load->model("get_list");
				$data['displayinvoice'] = $this->get_list->invoicedisplaysec();

				$data['title'] = "Invoice_list"; 
	   			$this->load->view("invoice_form_view_sec", $data);
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