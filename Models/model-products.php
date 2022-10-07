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

     class Products extends Base {

        public function allProducts(){
            $query = $this->db->prepare('
                SELECT product_id, product_name, product_image, product_price, season_id, stock
                FROM products
            ');

            $query->execute();

            return $query->fetchAll();
        }

        public function RandomProduct(){
            $query = $this->db->prepare('
                SELECT product_id, product_name, product_image, product_price
                FROM products
                ORDER BY RAND()
                LIMIT 6;

            ');

            $query->execute();

            return $query->fetchAll();
        }
    }

    
?>