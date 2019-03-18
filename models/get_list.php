<?php

	class Get_list extends CI_Model 
	{
	 
		function __construct()
		{
		   parent::__construct();
		}

		function getanimalslist()
		{
			$query = $this->db->query("SELECT animal_detail.animal_id, animal_detail.animal_name, species.species_name
										FROM animal_detail
										JOIN species
										ON animal_detail.species_id = species.species_id");
			return $query->result();
		}

		function getspecieslist()
		{
			$query = $this->db->query("SELECT * FROM species");
			return $query->result();
		}

		function getarealist()
		{
			$query = $this->db->query("SELECT * FROM area");
			return $query->result();
		}		

		function getclerklist()
		{
			$query = $this->db->query("SELECT * FROM clerk");
			return $query->result();
		}

		function getclerkarealist()
		{
			$query = $this->db->query("SELECT area.area_id, area.area_name, clerk.clerk_name
										FROM area
										JOIN clerk
										ON area.clerk_id = clerk.clerk_id");
			return $query->result();
		}

		function getfoodlist()
		{
			$query = $this->db->query("SELECT * FROM food_detail");
			return $query->result();
		}

		function getfoodstocklist()
		{
			$query = $this->db->query("SELECT * FROM food_detail WHERE quantity > 0");
			return $query->result();
		}

		function getsupplierlist()
		{
			$query = $this->db->query("SELECT * FROM supplier_detail");
			return $query->result();
		}

		function getfoodsupplierlist()
		{
			$query = $this->db->query("SELECT supplier_detail.supplier_id, supplier_detail.supplier_name, food_detail.food_name
										FROM supplier_detail
										JOIN food_detail
										ON supplier_detail.food_id = food_detail.food_id");
			return $query->result();
		}

		function foodquantity($aab)
		{
			$query = $this->db->query("SELECT quantity FROM food_detail
										WHERE food_id = '$aab'");
			$result = $query->result_array();
			$value = $result[0]['quantity'];
			return $value;
		}

		function getconsumelist()
		{
			$query = $this->db->query("SELECT animal_food.*, species.species_name
										FROM animal_food
										JOIN species
										ON animal_food.species_id = species.species_id");
			return $query->result();
		}

		function getorderlist()
		{
			$query = $this->db->query("SELECT order_no FROM order_list");
			return $query->result();
		}

		function getorderlistsupp($pass)
		{
			$query = $this->db->query("SELECT * FROM order_list
										where supplier_id='$pass'
										and supplied_quantity = 0");
			return $query->result();
		}

		function getorderlistdisplay()
		{
			$query = $this->db->query("SELECT order_list.*, supplier_detail.supplier_id, supplier_detail.supplier_name
										 FROM order_list
										 JOIN supplier_detail
										 ON order_list.supplier_id = supplier_detail.supplier_id");
			return $query->result();
		}

		function getorderlistfood()
		{
			$query = $this->db->query("SELECT *
										FROM food_detail
										WHERE quantity < 10
										AND quantity >0");
			return $query->result();
		}

		function getnotification()
		{
			$query = $this->db->query("SELECT food_id as aaa
										FROM food_detail
										WHERE quantity < 10
										AND quantity >0");
			return $query->num_rows();
		}

		function orderlistdisplay()
		{
			$query = $this->db->query("SELECT order_no, food_name, order_date, order_quantity, unit, expected_delivery
										 FROM order_list");
			return $query->result();
		}

		function invoicedisplay()
		{
			$query = $this->db->query("SELECT order_list.invoice_no, order_list.order_no, order_list.payment_amount
										 FROM order_list");
			return $query->result();
		}

		function invoicedisplaysup($pass)
		{
			$query = $this->db->query("SELECT order_list.*, order_list.food_name
										 FROM order_list
										 where order_list.supplier_id='$pass'
										 and invoice_no != ''");
			return $query->result();
		}		

		function invoicedisplaysec()
		{
			$query = $this->db->query("SELECT order_list.*
										 FROM order_list	
										 where invoice_no != ''");
			return $query->result();
		}

		function getsuppfoodlist($pass)
		{
			$query = $this->db->query("SELECT food_detail.*
										 FROM food_detail
										 JOIN supplier_food
										 ON food_detail.food_id = supplier_food.food_id
										 where supplier_food.supplier_id='$pass'");
			return $query->result();
		}	
	}
