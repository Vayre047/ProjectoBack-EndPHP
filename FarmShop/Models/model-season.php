<?php
	
	require_once("Models/model-base.php");

	class Season extends Base{

		public function getSeason($date){
			$query = $this->db->prepare("
				SELECT season_id, season_name
				FROM seasons
				WHERE
                    CAST(CONCAT(YEAR(CURDATE()), '-', seasons.date_start) as DATE) >= CURRENT_DATE AND
                    CAST(CONCAT(YEAR(CURDATE()), '-', seasons.date_end) as DATE) <= CURRENT_DATE
			");

			$query->execute();

			return $query->fetch();
		}

		public function getSeasonalProducts(){
			$query = $this->db->prepare("
				SELECT seasons.season_name, products.season_id, products.product_name, products.product_image, products.product_description, seasons.season_description
				FROM seasons
				INNER JOIN products USING (season_id)
				WHERE
                    CAST(CONCAT(YEAR(CURDATE()), '-', seasons.date_start) as DATE) >= CURRENT_DATE AND
                    CAST(CONCAT(YEAR(CURDATE()), '-', seasons.date_end) as DATE) <= CURRENT_DATE
			");

			$query->execute();

			return $query->fetchAll();
		}

		  public function allSeasons(){
            $query = $this->db->prepare('
                SELECT season_id, season_name
                FROM seasons
            ');

            $query->execute();

            return $query->fetchAll();
        }
	}

?>