<?php
	
	require_once("Models/model-base.php");

	class Users extends Base{

		public function registerDetails($data){
			$query = $this->db->prepare("
				INSERT INTO users
					(user_firstName, user_lastName, user_email, password, user_address, postal_code, city)
				VALUES
					(?, ?, ?, ?, ?, ?, ?)
			");

			$query->execute([
				$data["firstName"],
				$data["lastName"],
				$data["email"],
				password_hash($data["password"], PASSWORD_DEFAULT),
				$data["address"],
				$data["postal_code"],
				$data["city"]
			]);

			return $this->db->lastInsertID();
		}

		public function loginDetails($data){
			$query = $this->db->prepare("
					SELECT *
					FROM users
					WHERE user_email = ?
				");

			$query->execute([
				$data["email"]
			]);

			$user = $query->fetch();

			if(
                !empty($user) &&
                password_verify($data["password"], $user["password"])
                ){
                    return $user;
            }

			return [];
		} 

		public function getUser($data){
			$query = $this->db->prepare("
					SELECT user_firstName, user_lastName, user_email, password, user_address, postal_code, city
					FROM users
					WHERE user_email = ?
				");

			$query->execute([
				$data["user_email"]
			]);

			$user = $query->fetch();

			if(!empty($user) ){
                return $user;
            }

			return [];
		} 
		public function adminUser($data){
			$query = $this->db->prepare("
					SELECT user_email, password
					FROM users
					WHERE user_email = ?
				");

			$query->execute($data["user_email"]);

			$user = $query->fetch();

			if(!empty($user) && password_verify($data["password"], $user["password"]
			 && $user["admin"]==1) ){
                    return $user;
            }

			return [];
		}
		
		public function registerAdmin($data){
			$query = $this->db->prepare("
				INSERT INTO users
					(user_firstName, user_lastName, user_email, password, user_address, postal_code, city, admin)
				VALUES
					(?, ?, ?, ?, ?, ?, ?, ?)
			");

			$query->execute([
				$data["firstName"],
				$data["lastName"],
				$data["email"],
				password_hash($data["password"], PASSWORD_DEFAULT),
				$data["address"],
				$data["postal_code"],
				$data["city"],
				1
			]);

			return $this->db->lastInsertID();
		}

		public function getAdminUser(){
			$query = $this->db->prepare("
					SELECT user_id, user_firstName, user_lastName
					FROM users
					WHERE admin = 1
				");

			$query->execute();

			return $query->fetchAll();
		}

		public function deleteAdminUser($data){
			$query = $this->db->prepare("
					DELETE 
					FROM users
					WHERE user_id = ?
				");

			$query->execute([$data["user_id"]]);

			return $query->fetch();
		} 

		public function updateAdminUser($data, $user_id ){
			$query = $this->db->prepare("
                UPDATE users
                SET user_firstName = ?, user_lastName = ?, user_email = ?, password = ?, user_address = ?, postal_code = ?, city = ?
                WHERE user_id = ?
            ");

            $query->execute([
                $data["user_firstName"], $data["user_lastName"], $data["user_email"], $data["password"], $data["user_address"], $data["postal_code"], $data["city"], $user_id
            ]);
            
            return $query->fetch();
		}
	}

?>