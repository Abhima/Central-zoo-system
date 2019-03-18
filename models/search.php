<?php
class Search extends CI_Model
{
	function searchclerk($pass)
	{
		$query = $this->db->query("SELECT clerk.*, area.area_name, animal_detail.animal_name, species.species_name, food_detail.food_name
									FROM clerk
									JOIN area
									ON clerk.clerk_id = area.clerk_id
									JOIN animal_detail
									ON area.animal_id = animal_detail.animal_id
									JOIN species
									ON animal_detail.species_id = species.species_id
									JOIN species_food
									ON species.species_name = species_food.species_name
									JOIN food_detail
									ON species_food.food_id = food_detail.food_id
								  	WHERE clerk.clerk_id = '$pass'");
		return $query->result();

	}

	function searchfood($paid)
	{
		$query = $this->db->query("SELECT food_detail.food_id, food_detail.food_name, supplier_detail.*
									FROM food_detail
									JOIN supplier_food
									ON food_detail.food_id = supplier_food.food_id
									JOIN supplier_detail
									ON supplier_food.supplier_id = supplier_detail.supplier_id
								  	WHERE food_detail.food_id = '$paid'");
		return $query->result();

	}
	
}
?>