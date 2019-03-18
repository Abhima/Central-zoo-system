<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 session_start();
class Order_detail extends CI_Controller 
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

	   		if ($session_check == 'secretary')
	   		{
	   		
	   		
	   			$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
				
				$this->load->model("get_list");
				$data['results'] = $this->get_list->getorderlistdisplay();
				$data['stocknotification'] = $this->get_list->getnotification();
				
			 	$data['title'] = "Order Detail"; 
		      	$this->load->view('order_detail_view', $data);
	   		}

	   		else if ($session_check == 'admin')
	   		{
	   			redirect('home', 'refresh');
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

	function delivered()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('deliveryDate', 'deliveryDate', 'trim|xss_clean');
		$this->form_validation->set_rules('DataValue', 'DataValue', 'trim|xss_clean');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
	   
	   else
	   {
		   	$Value = $this->input->post('DataValue');
			$Value2 = $this->input->post('deliveryDate');
			
			$this->load->model('update');
			
			$this->update->foodDelivery($Value, $Value2);
			$this->update->increaseStock($Value);
			
			redirect('order_detail', 'refresh');
	   }
	}
}

?>