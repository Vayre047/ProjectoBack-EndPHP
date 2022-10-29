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
					SELECT user_email, password
					FROM users
					WHERE user_email = ?
				");

			$query->execute([
				$data["user_email"]
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

	}

?> 