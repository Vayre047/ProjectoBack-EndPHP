<?php

    require("Layout/header.php");
    
?>
    <h1 class="text-center"><?php echo $title; ?></h1>
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