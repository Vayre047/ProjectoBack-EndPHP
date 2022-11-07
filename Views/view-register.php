<?php
    require_once("Layout/header.php");
?>

    <h1 class="mainTitle pt-3"><?php echo $title; ?></h1>
    <form class="text-center pt-5" method="post" action="<?php echo ROOT;?>/register">
        <div class="pt-3 formInputs">
            <input class="inputConfiguration w-25 text-center" type="text" name="user_firstName" placeholder="Digite o seu nome" minlength="3" maxlength="72" required>
        </div>
        <div class="pt-3 formInputs">
            <input class="inputConfiguration w-25 text-center" type="text" name="user_lastName" placeholder="Digite o seu apelido" minlength="3" maxlength="72" required>
        </div>
        <div class="pt-3 formInputs">
            <input class="inputConfiguration w-25 text-center" type="email" name="user_email" placeholder="Digite o seu email" required>
        </div>
        <div class="pt-3 formInputs">
            <input class="inputConfiguration w-25 text-center" type="password" name="password" placeholder="Digite a sua password" minlength="5" maxlength="255" required>
        </div>
        <div class="pt-3 formInputs">
            <input class="inputConfiguration w-25 text-center" type="password" name="repeatPassword" placeholder="Digite novamento a sua password" minlength="5" maxlength="255" required>
        </div>
        <div class="pt-3 formInputs">
            <input class="inputConfiguration w-25 text-center" type="text" name="user_address" placeholder="Digite a sua morada" minlength="10" maxlength="130" required>
        </div>
        <div class="pt-3 formInputs">
            <input class="inputConfiguration w-25 text-center" type="text" name="postal_code" placeholder="Digite o seu código postal" minlength="4" maxlength="35" required>
        </div>
        <div class="pt-3 formInputs">
            <input class="inputConfiguration w-25 text-center" type="text" name="city" placeholder="Digite a sua cidade" minlength="5" maxlength="40" required>
        </div>
        <div class="pt-3">
                <button class="btn btn-success" type="submit" name="send">Registar</button>
        </div>
    </form>

<?php
    require_once("Layout/footer.php");
?>
