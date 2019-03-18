<?php
class Insert extends CI_Model
{
	function animal($ad)
	{
		$this->db->insert('animal_detail', $ad);
	}
	
	function species($ad)
	{
		$this->db->insert('species', $ad);	
	}

	function clerk($ad)
	{
		$this->db->insert('clerk', $ad);
	}

	function area($ad)
	{
		$this->db->insert('area', $ad);	
	}

	function clerkarea($ad)
	{
		$this->db->insert('area', $ad);
	}

	function food($ad)
	{
		$this->db->insert('food_detail', $ad);
	}

	function supplier($ad)
	{
		$this->db->insert('supplier_detail', $ad);
	}

	function foodsupplier($ad)
	{
		$this->db->insert('food_detail', $ad);
	}

	function supplierintofood($ad)
	{
		$this->db->insert('supplier_food', $ad);
	}

	function consumedetail($ad)
	{
		$this->db->insert('animal_food', $ad);
	}

	function newuser($ad)
	{
		$this->db->insert('users', $ad);
	}

	function species_food($ad)
	{
		$this->db->insert('species_food', $ad);
	}

	function orderlist($ad)
	{
		$this->db->insert('order_list', $ad);
	}

	function invoice($ad)
	{
		$this->db->insert('invoice', $ad);
	}
}