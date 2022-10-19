<?php

    if($_SERVER["REQUEST_METHOD"] === "POST" && !empty($id) && is_numeric($id)){

        header("Content-Type: application/json");

        unset($_SESSION["cart"][$id]);

        echo '{"Message":"Accepted"}';
    }else{
        http_response_code(405);
        exit;
    }

?>