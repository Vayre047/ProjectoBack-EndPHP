<?php
    require_once("Layout/header.php");
?>
<form class="text-center" method="post" action="<?php echo ROOT?>/login">
    <div class="pt-3 formInputs">
        <input class="inputConfiguration text-center" type="email" name="user_email" placeholder="Digite o seu e-mail" required>
    </div>
    <div class="pt-3">
        <input class="inputConfiguration text-center" type="password" name="password" placeholder="Digite a sua password" required>
    </div>
    <div>
        <label class="pt-3">
            <input type="checkbox" name="saveInformation">
            Guardar os seus dados
        </label>
    </div>
    <div class="pt-3">
        <button class="btnInputs fw-bold border border-success btn btn-success" type="button">Entrar</button>
    </div>
</form>

<?php
    require_once("Layout/footer.php");
?>