<?php
	
	require_once("Models/model-base.php");

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

		public function getProduct($id){
    		$query = $this->db->prepare("
    			SELECT product_id, product_name, product_description, product_image, product_price, stock
    			FROM products
    			WHERE product_id = ?
			");

			$query->execute([$id]);

			return $query->fetch();
    	}

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

?>