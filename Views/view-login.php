<?php
    require_once("Layout/header.php");
?>

<h1 class="text-center"><?php echo $title; ?></h1>


<?php
    if(!isset($_SESSION["user_id"]) && !empty($_SESSION["cart"])){
       ?>
      <p class="h4 text-center py-4"> Entre na sua conta antes de avançar para pagamento, ou <a href="<?php echo ROOT;  ?>/register">crie uma</a> </p>  
      <?php
    }

    if(isset($message)){
        echo '<p class="text-center" role="alert">' .$message. '</p>';
    }

?>
<form class="text-center" method="post" action="<?php echo ROOT?>/login">
    <div class="pt-3 formInputs">
        <input class="inputConfiguration text-center" type="email" name="user_email" placeholder="Digite o seu e-mail" required>
    </div>
    <div class="pt-3">
        <input class="inputConfiguration text-center" type="password" name="password" placeholder="Digite a sua password" required>
    </div>
    <div>
        <label class="pt-1">
            <input type="checkbox" name="saveInformation">
            Guardar os seus dados
        </label>
    </div>
    <div class="pt-3">
        <button class="btnInputs fw-bold border border-success btn btn-success" type="submit" name="send">Entrar</button>
    </div>
</form>

<?php
    require_once("Layout/footer.php");
?>