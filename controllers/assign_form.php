<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 session_start();
class Assign_form extends CI_Controller 
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

	   		$data['username'] = $session_data['username'];

	   		$session_check['username'] = $session_data['user_type'];

	   		if ($session_check['user_type'] == 'admin')
	   		{
	   			$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];

				$this->load->model('get_list');
				$data['species_pass'] = $this->get_list->getspecieslist();
				
				$data['clerk_pass'] = $this->get_list->getclerklist();

				$data['area_pass'] = $this->get_list->getarealist();

				$data['food_pass'] = $this->get_list->getfoodlist();

				$data['supplier_pass'] = $this->get_list->getsupplierlist();

				$data['title'] = "Assign Data"; 
		     	$this->load->view('assign_value_view', $data);
	   		}

	   		else if ($session_check['user_type'] == 'secretary_home')
	   		{
	   			redirect('secretary_home', 'refresh');
	   		}

	   		else if ($session_check['user_type'] == 'supplier_home')
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

	function assign_species()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('species_id', 'Species_id', 'trim|required|xss_clean|is_unique[species.species_id]');
	   $this->form_validation->set_rules('species', 'Species', 'trim|required|xss_clean|is_unique[species.species_name]');
	 
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 $session_data = $this->session->userdata('logged_in');
	  		$data['username'] = $session_data['username'];

	  		$this->load->model('get_list');
			$data['species_pass'] = $this->get_list->getspecieslist();
			
			$data['title'] = "Assign Data"; 
    		$this->load->view('assign_value_view', $data);
	   }
	   else
	   {
		//Go to private area
		$this->load->model('insert');
		$data = array(
			'species_id' => $this->input->post('species_id'),
			'species_name' => $this->input->post('species')
		);
		$this->insert->species($data);
		 redirect('home', 'refresh');
	   }
	}

	function assign_animal()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('animal_id', 'Animal_id', 'trim|required|xss_clean|is_unique[animal_detail.animal_id]');
	   	$this->form_validation->set_rules('animal_name', 'Animal_name', 'trim|required|xss_clean|is_unique[animal_detail.animal_name]');
	   	$this->form_validation->set_rules('species_name', 'Species_name', 'trim|required');
	 
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 $session_data = $this->session->userdata('logged_in');
	  		$data['username'] = $session_data['username'];

	  		$this->load->model('get_list');
			$data['animal_pass'] = $this->get_list->getanimalslist();

			$data['title'] = "Assign Data"; 
    		$this->load->view('assign_value_view', $data);
	   }
	   else
	   {
		//Go to private area
		$this->load->model('insert');
		$data = array(
			'animal_id' => $this->input->post('animal_id'),
			'animal_name' => $this->input->post('animal_name'),
			'species_id' => $this->input->post('species_id')
		);
		$this->insert->animal($data);
		 redirect('home', 'refresh');
	   }
	}

	function assign_clerk()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('clerk_id', 'Clerk_id', 'trim|required|xss_clean|is_unique[clerk.clerk_id]');
	   $this->form_validation->set_rules('clerk_name', 'Clerk_name', 'trim|required');
	 
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 $session_data = $this->session->userdata('logged_in');
	  		$data['username'] = $session_data['username'];

	  		$this->load->model('get_list');
			$data['clerk_pass'] = $this->get_list->getclerklist();
			
			$data['title'] = "Assign Data"; 
    		$this->load->view('assign_value_view', $data);
	   }
	   else
	   {
		//Go to private area
		$this->load->model('insert');
		$data = array(
			'clerk_id' => $this->input->post('clerk_id'),
			'clerk_name' => $this->input->post('clerk_name')
		);
		$this->insert->clerk($data);
		 redirect('home', 'refresh');
	   }
	}

	function assign_area()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('area_id', 'Area_id', 'trim|required|xss_clean|is_unique[area.area_id]');
	   	$this->form_validation->set_rules('area_name', 'Area_name', 'trim|required|xss_clean|is_unique[area.area_name]');
	 
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 $session_data = $this->session->userdata('logged_in');
	  		$data['username'] = $session_data['username'];

	  		$this->load->model('get_list');
			$data['area_pass'] = $this->get_list->getarealist();
			
			$data['title'] = "Assign Data";
    		$this->load->view('assign_value_view', $data);
	   }
	   else
	   {
		//Go to private area
		$this->load->model('insert');
		$data = array(
			'area_id' => $this->input->post('animal_id'),
			'area_name' => $this->input->post('animal_name')
		);
		$this->insert->area($data);
		 redirect('home', 'refresh');
	   }
	}

	function assign_clerkarea()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('area_id', 'Area_id', 'trim|required|xss_clean|is_unique[area.area_id]');
		$this->form_validation->set_rules('clerk_id', 'Clerk_id', 'trim|required|xss_clean|is_unique[clerk.clerk_id]');
		
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 $session_data = $this->session->userdata('logged_in');
	  		$data['username'] = $session_data['username'];

	  		$this->load->model('get_list');
			$data['area_pass'] = $this->get_list->getarealist();

			$data['clerk_pass'] = $this->get_list->getclerklist();

			$data['title'] = "Assign Data"; 
    		$this->load->view('assign_value_view', $data);
	   }
	   else
	   {
		//Go to private area
		$this->load->model('insert');
		$data = array(
			'food_id' => $this->input->post('food_id'),
			'supplier_id' => $this->input->post('supplier_id'),
		);
		$this->insert->clerkarea($data);
		 redirect('home', 'refresh');
	   }
	}

	function assign_food()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('food_id', 'Food_id', 'trim|required|xss_clean|is_unique[food_detail.food_id]');
	   	$this->form_validation->set_rules('food_name', 'Food_name', 'trim|required|xss_clean|is_unique[food_detail.food_name]');
	 
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 $session_data = $this->session->userdata('logged_in');
	  		$data['username'] = $session_data['username'];

	  		$this->load->model('get_list');
			$data['food_pass'] = $this->get_list->getfoodlist();
			
			$data['title'] = "Assign Data"; 
    		$this->load->view('assign_value_view', $data);
	   }
	   else
	   {
		//Go to private area
		$this->load->model('insert');
		$data = array(
			'food_id' => $this->input->post('food_id'),
			'food_name' => $this->input->post('food_name')
		);
		$this->insert->food($data);
		 redirect('home', 'refresh');
	   }
	}

	function assign_supplier()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('supplier_id', 'Supplier_id', 'trim|required|xss_clean|is_unique[supplier_detail.supplier_id]');
	   	$this->form_validation->set_rules('supplier_name', 'Supplier_name', 'trim|required|xss_clean|is_unique[supplier_detail.supplier_name]');
	   	$this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean|is_unique[supplier_detail.address]');
	   	$this->form_validation->set_rules('contact_no', 'Contact_no', 'trim|required|xss_clean|is_unique[supplier_detail.contact_no]');



	 
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 $session_data = $this->session->userdata('logged_in');
	  		$data['username'] = $session_data['username'];

	  		$this->load->model('get_list');
			$data['supplier_pass'] = $this->get_list->getsupplierlist();
			
			$data['title'] = "Assign Data"; 
    		$this->load->view('assign_value_view', $data);
	   }
	   else
	   {
		//Go to private area
		$this->load->model('insert');
		$data = array(
			'supplier_id' => $this->input->post('supplier_id'),
			'supplier_name' => $this->input->post('supplier_name'),
			'address' => $this->input->post('address'),
			'contact_no' => $this->input->post('contact_no')
		);
		$this->insert->supplier($data);
		 redirect('home', 'refresh');
	   }
	}

	function assign_foodsupplier()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('supplier_id', 'Supplier_id', 'trim|required|xss_clean|is_unique[supplier_detail.supplier_id]');
	   	$this->form_validation->set_rules('food_id', 'Food_id', 'trim|required|xss_clean|is_unique[food_detail.food_id]');
	 
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 $session_data = $this->session->userdata('logged_in');
	  		$data['username'] = $session_data['username'];

	  		$this->load->model('get_list');
			$data['supplier_pass'] = $this->get_list->getsupplierlist();
			
			$data['food_pass'] = $this->get_list->getfoodlist();

			$data['title'] = "Assign Data"; 
    		$this->load->view('assign_value_view', $data);
	   }
	   else
	   {
		//Go to private area
		$this->load->model('insert');
		$data = array(
			'food_id' => $this->input->post('food_id'),
			'supplier_id' => $this->input->post('supplier_id'),
		);
		$this->insert->foodsupplier($data);
		 redirect('home', 'refresh');
	   }
	}	
}