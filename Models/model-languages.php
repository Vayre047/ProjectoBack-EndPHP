<?php
	
	require_once("Models/model-base.php");

	class Languages extends Base{

		public function getLanguage($id){
			$query = $this->db->prepare("
				SELECT language_id, language_code, language_image
				FROM languages
				WHERE language_id = ?
			");
		
			$query->execute([$id]);

			return $query->fetchAll();
		}
        
        public function getAllLanguages(){
            $query = $this->db->prepare("
                SELECT language_id, language_code, language_image
                FROM languages
            ");

            $query->execute();

            return $query->fetchAll();
        }
    }

?>