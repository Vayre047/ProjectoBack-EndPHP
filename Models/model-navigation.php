<?php

    require("Models/model-base.php");

    class Categories extends Base{
        
        public function allCategories(){
            $query = $this->db->prepare("
                SELECT category_id, category_name, category_image
                FROM categories
            ");

            $query->execute();

            return $query->fetchAll();
        }
    }

    class Seasons extends Base{

            public function allSeasons(){
            $query = $this->db->prepare('
                SELECT season_id, season_name
                FROM season
            ');

            $query->execute();

            return $query->fetchAll();
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

    $title = "FarmShop - Homepage";
    
?>