<?php

	require_once("Models/model-base.php");

	class Cart extends Base{

		public function cart($id){
			$query = $this->db->prepare("
				SELECT product_id, product_name, product_description, product_image, product_price, stock
				FROM products
				WHERE product_id = ?
			");

			$query->execute([$id]);

			return $query->fetchAll();
		}
	}

	/*
	class Order extends Base{
		public function orderShipping(){
			$query = $this->db->prepare("
				SELECT shipping_date
				FROM orders
			");

			$query->execute();

			return $query->fetchAll();
		}
	}*/

?>