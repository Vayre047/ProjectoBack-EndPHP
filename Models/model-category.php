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
		public function addCategory($data){
			$query = $this->db->prepare("
				INSERT INTO categories
					(category_name, category_description, category_image)
				VALUES 
					(?, ?, ?)
			");

			$query->execute([
				$data["category_name"],
				$data["category_description"],
				$data["category_image"]
			]);

			return $this->db->lastInsertID();
		}

		public function deleteCategory($data){
			$query = $this->db->prepare("
					DELETE 
					FROM categories
					WHERE category_id = ?
				");

			$query->execute([$data["category_id"]]);

			return $query->fetch();
		}
    }

?>