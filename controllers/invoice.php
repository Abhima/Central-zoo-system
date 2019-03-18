<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Invoice extends CI_Controller 
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
				$data['displayorder'] = $this->get_list->getorderlistsupp($supplierid);
				$data['listfood'] = $this->get_list->getsuppfoodlist($supplierid);


				$data['title'] = "Invoice"; 
	   			$this->load->view("invoice_form_view_sup", $data);
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
				$data['stocknotification'] = $this->get_list->getnotification();

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

	function Invoice_form()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('invoice_no', 'Invoice_no', 'trim|required|xss_clean');
	   	$this->form_validation->set_rules('payment_amount', 'Payment_amount', 'required');
		
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 $this->index();
	   }
	   else
	   {
	   	$invoice_no = $this->input->post('invoice_no');
	   	$order_no = $this->input->post('order_no');
	   	$delivery_date = $this->input->post('delivery_date');
	   	$Food_names = $this->input->post('Food_name');
	   	$supplied_quantity = $this->input->post('supplied_quantity');
	   	$payment_amount = $this->input->post('payment_amount');
	   	$descripancy = $this->input->post('descripancy');
	   	$a=0;
		//Go to private area
		foreach ($Food_names as $Food_name) 
		{
			$b=$a++;
			$this->load->model('update');
		
			$this->update->delivery($invoice_no, $order_no, $delivery_date, $Food_name, $supplied_quantity[$b], $payment_amount[$b], $descripancy[$b]);
		
		}
		redirect('invoice', 'refresh');
	   }
	} 
 
}
 
?>