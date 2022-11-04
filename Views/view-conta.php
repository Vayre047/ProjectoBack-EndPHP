<?php
    require_once("Layout/header.php");
?>

<?php    
    if (!empty($_SESSION["user_id"])) { 
	?>
        <p class="h4">Nome: <?php echo $_SESSION["user_id"]["user_firstName"] .' '. $_SESSION["user_id"]["user_lastName"]?></p>
        <p class="h4">Email: <?php echo $_SESSION["user_id"]["user_email"]?></p>
        <p class="h4">Morada: <?php echo $_SESSION["user_id"]["user_address"]?></p>
        <p class="h4">Cidade: <?php echo $_SESSION["user_id"]["city"]?></p>
        <p class="h4">Código Postal: <?php echo $_SESSION["user_id"]["postal_code"]?></p>

    <?php 
	}
?>

<?php
    require_once("Layout/footer.php");
?>