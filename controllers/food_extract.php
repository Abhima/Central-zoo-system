<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Food_extract extends CI_Controller 
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
			$session_authority = $session_data['user_type'];
			
			if($session_authority == 'admin')
			{
				$data['username'] = $session_data['username'];

				$this->load->model("get_list");
				$data['Speciesresult'] = $this->get_list->getspecieslist();
				$data['results'] = $this->get_list->getclerklist();
				$data['foodlist'] = $this->get_list->getfoodstocklist();


				$this->load->model("search");
				$data['searchclerk'] = $this->search->searchclerk($am);
				
				$data['title'] = "Food Extraction";
				$this->load->view('food_extract_view', $data);


			}
			
			else if($session_authority == 'secretary')
			{
				redirect('secretary_home', 'refresh');
			}
			
			else if($session_authority == 'supplier')
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
	
	function food_extraction()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('ConsumedDate', 'ConsumedDate', 'trim|xss_clean|required');
		$this->form_validation->set_rules('Time', 'Time', 'trim|xss_clean|required');
		$this->form_validation->set_rules('Clerk_ID', 'Clerk ID', 'trim|required');
		$this->form_validation->set_rules('Species_IDD', 'Species ID', 'trim|required');
		$this->form_validation->set_rules('Food_IDD', 'Food_IDD', 'trim|required');
		$this->form_validation->set_rules('ConsumedQuantity', 'Consumed Quantity', 'trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
	   
	   else
	   {
		   $Consumed = $this->input->post('ConsumedQuantity');
		   $foodID = $this->input->post('Food_IDD');
		   $this->load->model('get_list');
		   $stock = $this->get_list->foodquantity($foodID);
		   
		   if($stock < $Consumed)
		   {
			   header('Location: food_extract?mode=overstock');
		   }
		   
		   else
		   {
			   $this->load->model('insert');
				$data = array(
							'ConsumeDate' => $this->input->post('ConsumedDate'),
							'ConsumeQuantity' => $this->input->post('ConsumedQuantity'),
							'Time' => $this->input->post('Time'),
							'clerk_id' => $this->input->post('Clerk_ID'),
							'species_id' => $this->input->post('Species_IDD'),
							'food_id' => $this->input->post('Food_IDD')
							
							);
				$this->insert->consumedetail($data);
				
				$data = $this->input->post('Food_IDD');
				
				$file = $this->input->post('ConsumedQuantity');
							  
				$this->load->model('update');
				$this->update->foodextract($data, $file);
				
				redirect('home', 'refresh');
		   }
	   	}  	
	}

	function searchclerk()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Clerk_ID', 'Clerk_id', 'trim|xss_clean');

		if ($this-> form_validation->run() == FALSE)
		{
			$this->index();
		}
		
		else
		{
			$Clerk_ID = $this->input->post('Clerk_ID');

			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];

			$this->load->model("get_list");
			$data['Speciesresult'] = $this-> get_list->getspecieslist();
			$data['results'] = $this->get_list->getclerklist();
			$data['foodlist'] = $this->get_list->getfoodstocklist();


			$this->load->model("search");
			$data['searchclerk'] = $this->search->searchclerk($Clerk_ID);
				
			$data['title'] = "Food Extraction";
			$this->load->view('food_extract_view', $data);

		}
	}
 
}
 
?>