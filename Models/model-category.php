<?php
	
	require_once("Models/model-base.php");

	class Categories extends Base{

		public function OneCategory($id){
			$query = $this->db->prepare("
				SELECT category_id, category_name, category_description, category_image
				FROM categories
				WHERE category_id = ?
			");
		
			$query->execute([$id]);

			return $query->fetchAll();
		}
        
        public function allCategories(){
            $query = $this->db->prepare("
                SELECT category_id, category_name, category_image
                FROM categories
            ");

            $query->execute();

            return $query->fetchAll();
        }
    }

?>