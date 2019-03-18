<?php
class Update extends CI_Model
{
	function foodextract($pass, $pass2)
	{
		$query = $this->db->query("UPDATE food_detail 
								  SET food_detail.quantity = food_detail.quantity - $pass2
								  WHERE food_detail.food_id = '$pass'");
	}
	
	function addclerkintoarea($clerk, $area)
	{
		$query = $this->db->query("UPDATE area 
								  SET clerk_id = '$clerk'
								  WHERE area_id = '$area'");
	}

	function delivery($invoice_no, $order_no, $delivery_date, $Food_name, $supplied_quantity, $payment_amount, $descripancy)
	{
		$query = $this->db->query("UPDATE order_list 
								  SET invoice_no = '$invoice_no',
								  supplied_quantity = $supplied_quantity,
								  delivery_date = '$delivery_date',
								  payment_amount = '$payment_amount',
								  Discrepancy = '$descripancy'
								  WHERE order_no = '$order_no'
								  AND food_name = '$Food_name'");
	}

	function foodDelivery($Value, $Value2)
	{
		$query = $this->db->query("UPDATE order_list 
								  SET remark = 'Received',
								  delivery_date = '$Value2'
								  WHERE id = '$Value'");
	}

	function increaseStock($Value)
	{
		$query = $this->db->query("UPDATE food_detail 
								  SET food_detail.quantity = food_detail.quantity + (SELECT order_list.supplied_quantity
															  FROM order_list
															  WHERE order_list.id = '$Value'),
								  food_detail.unit = (SELECT order_list.unit
															  FROM order_list
															  WHERE order_list.id = '$Value')
								  WHERE food_detail.food_name = (SELECT order_list.food_name
															   FROM order_list
															   WHERE order_list.id = '$Value')");
		
	}
}
?>