<?php
	
	require_once("Models/model-base.php");

	class Season extends Base{

		public function getSeason($date){
			$query = $this->db->prepare("
				SELECT season_id, season_name
				FROM season
				WHERE ? BETWEEN date_start AND date_end 
			");

			$query->execute(["2022-07-20"]);

			return $query->fetch();
		}

		public function productSeason($id){
			$query = $this->db->prepare("
				SELECT season.season_name, products.season_id, products.product_name, products.product_image, products.product_description, season.season_description
				FROM season
				INNER JOIN products
				ON season.season_id = products.season_id
				WHERE season.season_id = ?
			");

			$query->execute([$id]);

			return $query->fetchAll();
		}
	}

?>