<?php

	require_once("Models/model-base.php");

	class ListProducts extends Base{

		public function listProducts($id){
			$query = $this->db->prepare("
				SELECT categories.category_id, categories.category_name, products.product_id, products.product_image
				FROM products
				INNER JOIN categories
				ON categories.category_id = products.category_id
				WHERE categories.category_id = ?
			");

			$query->execute([$id]);

			return $query->fetchAll();
		}
	}
?>