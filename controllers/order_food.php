<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Order_food extends CI_Controller 
{
 
	function __construct()
	{
		parent::__construct();
	}

	function index($am = '')
	{

		if($this->session->userdata('logged_in'))
		{

	   		$session_data = $this->session->userdata('logged_in');

	   		$data['user_type'] = $session_data['user_type'];

	   		$session_check = $session_data['user_type'];

	   		if ($session_check== 'secretary')
	   		{
	   			$session_data = $this->session->userdata('logged_in');
	   			$data['username'] = $session_data['username'];
		
		   		$this->load->model("get_list");
		   		$data['getorderlistfood'] = $this->get_list->getorderlistfood();
				$data['listfoodextraction'] = $this->get_list->getfoodlist();
				$data['listsupplierextraction'] = $this->get_list->getsupplierlist();
				$data['stocknotification'] = $this->get_list->getnotification();
				
				$this->load->model("search");
				$data['searchfood'] = $this->search->searchfood($am);

				$data['title'] = "Order Form"; 
	   			$this->load->view("order_form_view", $data);
	   		}

	   		else if ($session_check == 'admin')
	   		{
	   			redirect('home', 'refresh');
	   		} 
	   		

	   		else if ($session_check == 'supplier')
	   		{
	   			redirect('supplier_home', 'refresh');
	   		}

	   		else
			{
				echo "Cannot verify authority.";
			}

	   }
	   else
	   {
		 //If no session, redirect to login page
		 redirect('login', 'refresh');
	   }
	} 
 
 	function Order_food_form()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('order_no', 'Order_no', 'trim|required|xss_clean|is_unique[order_list.order_no]');
	   	$this->form_validation->set_rules('supplier_id', 'Supplier_id', 'trim|required');
	   	$this->form_validation->set_rules('Food_name', 'Food_name', 'xss_clean|required');
		$this->form_validation->set_rules('order_date', 'Order_date', 'trim|required');
		$this->form_validation->set_rules('order_quantity', 'Order_quantity', 'required');
		$this->form_validation->set_rules('unit', 'Unit', 'required');
		$this->form_validation->set_rules('expected_delivery', 'Expected_delivery', 'trim|required');
		
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 $this->index();
	   }
	   else
	   {
		//Go to private area
		$this->load->model('insert');
			   $Food_name = $this->input->post('Food_name');
			   $unit = $this->input->post('unit');
			   $order_quantity = $this->input->post('order_quantity');
			   $j=0;
			   
				foreach($Food_name as $food) 
				{
					$i = $j++;
					
				   if($order_quantity[$i] > 0)
				   {
					  $data = array(
									'order_no' => $this->input->post('order_no'),
									'supplier_id' => $this->input->post('supplier_id'),			
									'food_name' => $food,
									'order_date' => $this->input->post('order_date'),
									'order_quantity' => $order_quantity[$i],
									'unit' => $unit[$i],
									'expected_delivery' => $this->input->post('expected_delivery')
												
								);
						$this->insert->orderlist($data);
						header('Location: order_food');
					   
				   }
				   
		   			else
					{
						header('Location: .?Quantity=error');
					}
				}
	   }
	}

	function searchfood()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Food_id', 'Food_ID', 'trim|xss_clean');

		if ($this-> form_validation->run() == FALSE)
		{
			$this->index();
		}
		
		else
		{
			$Food_id = $this->input->post('Food_id');

			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];

			$this->load->model("get_list");
		   	$data['getorderlistfood'] = $this->get_list->getorderlistfood();
			$data['listfoodextraction'] = $this->get_list->getfoodlist();
			$data['listsupplierextraction'] = $this->get_list->getsupplierlist();
			$data['stocknotification'] = $this->get_list->getnotification();
				
			$this->load->model("search");
			$data['searchfood'] = $this->search->searchfood($Food_id);
				
			$data['title'] = "Order Extraction";
			$this->load->view('order_form_view', $data);

		}
	}
}
 
?>
