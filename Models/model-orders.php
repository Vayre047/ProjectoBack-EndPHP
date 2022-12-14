<?php
    
    require_once("Models/model-base.php");

    class Orders extends Base{

        public function createOrders($user_id){
            $query = $this->db->prepare("
                INSERT INTO orders (user_id)
                VALUES(?)
            ");
            
            $query->execute([
                $user_id["user_id"]
            ]);
    
            return $this->db->lastInsertId();
        }

         public function createOrderDetail($data){
            
            $query = $this->db->prepare("
                INSERT INTO orderdetails (order_id, product_id, product_quantity, product_price)
                VALUES(?, ?, ?, ?)
            ");
            

            return $query->execute([
                $data["order_id"],
                $data["product_id"],
                $data["quantity"],
                $data["product_price"]
            ]);
    
            return $this->db->lastInsertId();
        }
    }
	
?>