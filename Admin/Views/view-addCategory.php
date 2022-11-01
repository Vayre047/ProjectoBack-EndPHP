<?php

    require("Layout/header.php");

?>
    <h1 class="mainTitle pt-3"><?php echo $title; ?></h1>
    <form class="text-center pt-3 col" method="post" action="<?php echo ROOT;?>/addCategory">
        <div>
            <label>
                Nome da Categoria:
            </label>
            <input class="inputConfiguration w-25 text-center" type="text" name="category_name" placeholder="Nome da Categoria" minlength="3" maxlength="20" required>
        </div>
        <div class="pt-3">
            <label>
                Descrição da Categoria:
            </label>
            <input class="inputConfiguration w-25 text-center" type="text" name="category_description" placeholder="Descrição da Categoria" minlength="3" maxlength="200" required>
        </div>
        <div class="pt-3">
            <label>
                Nome da Imagem:
            </label>
            <input class="text-center inputConfiguration" type="text" placeholder="Nome da Imagem" name="category_image">
        </div>
        <div class="pt-3">
            <button type="submit" class="btn btn-success">Inserir Categoria</button>
        </div>
    </form>