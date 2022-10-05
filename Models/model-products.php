<?php
	
	require_once("Models/model-base.php");
    
    class ProductsDetail extends Base{

		public function getProduct($id){
    		$query = $this->db->prepare("
    			SELECT product_id, product_name, product_description, product_image, product_price, stock
    			FROM products
    			WHERE product_id = ?
			");

			$query->execute([$id]);

			return $query->fetch();
    	}
    }
    
?>