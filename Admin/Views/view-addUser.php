<?php

    require("Layout/header.php");

?>
    <h1 class="mainTitle pt-3"><?php echo $title; ?></h1>
    <form class="text-center pt-5" method="post" action="<?php echo ROOT;?>/addUser">
        <div class="pt-3 formInputs">
            <label>
                Digite o seu Nome:
            </label>
            <input class="inputConfiguration w-25 text-center" type="text" name="firstName" placeholder="Digite o seu nome" minlength="3" maxlength="72" required>
        </div>
        <div class="pt-3 formInputs">
            <label>
                Digite o seu Apelido:
            </label>
            <input class="inputConfiguration w-25 text-center" type="text" name="lastName" placeholder="Digite o seu apelido" minlength="3" maxlength="72" required>
        </div>
        <div class="pt-3 formInputs">
            <label>
                Digite o seu E-mail:
            </label>
            <input class="inputConfiguration w-25 text-center" type="email" name="email" placeholder="Digite o seu email" required>
        </div>
        <div class="pt-3 formInputs"><label>
                Digite a sua Password:
            </label>
            <input class="inputConfiguration w-25 text-center" type="password" name="password" placeholder="Digite a sua password" minlength="5" maxlength="255" required>
        </div>
        <div class="pt-3 formInputs">
            <label>
                Digite novamente a sua Password:
            </label>
            <input class="inputConfiguration w-25 text-center" type="password" name="repeatPassword" placeholder="Digite novamento a sua password" minlength="5" maxlength="255" required>
        </div>
        <div class="pt-3 formInputs">
            <label>
                Digite a sua Morada:
            </label>
            <input class="inputConfiguration w-25 text-center" type="text" name="address" placeholder="Digite a sua morada" minlength="10" maxlength="130" required>
        </div>
        <div class="pt-3 formInputs">
            <label>
                Digite o seu Código Postal:
            </label>
            <input class="inputConfiguration w-25 text-center" type="text" name="postal_code" placeholder="Digite o seu código postal" minlength="4" maxlength="35" required>
        </div>
        <div class="pt-3 formInputs">
            <label>
                Digite a sua Cidade:
            </label>
            <input class="inputConfiguration w-25 text-center" type="text" name="city" placeholder="Digite a sua cidade" minlength="5" maxlength="40" required>
        </div>
        <div class="pt-3">
            <?php echo '<a href="' .ROOT. '/">
                <button class="btn btn-success" type="submit" name="send">Inserir</button>
            </a>'?>
        </div>
    </form>