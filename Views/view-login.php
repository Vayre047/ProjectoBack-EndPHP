<?php
    require("Layout/header.php");
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
    <form method="post" action="<?php echo ROOT;  ?>/login">
        <div>
            <label>
                Email
                <input type="email" name="email" required>
            </label>
        </div>
        <div>
            <label>
                Password
                <input type="password" name="password" required minlength="8" maxlength="1000">
            </label>
        </div>
        <div>
            <button type="submit" name="send">Entrar</button>
        </div>
    </form>

<?php
    require("Layout/footer.php");
?>