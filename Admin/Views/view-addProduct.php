<?php

    require("Layout/header.php");
    var_dump($_POST);
?>
    <h1 class="mainTitle pt-3"><?php echo $title; ?></h1>
    <form class="text-center pt-3 col" method="post" action="<?php echo ROOT;?>/addProduct">
        <div class="pt-3 formInputs">
            <label>
                Nome do Producto:
            </label>
            <input class="inputConfiguration w-25 text-center" type="text" name="product_name" placeholder="Nome do Produto" minlength="3" maxlength="72" required>
        </div>
        <div class="pt-3 formInputs">
            <label>
                Descreva o Producto:
            </label>
            <input class="inputConfiguration w-25 text-center" type="text" name="product_description" placeholder="Descreva o Produto" minlength="3" maxlength="1000" required>
        </div>
        <div class="pt-3 formInputs">
            <label>
                Nome da Imagem:
            </label>
            <input class="inputConfiguration w-25 text-center" type="text" name="product_image" placeholder="Nome da Imagem" required>
        </div>
        <div class="pt-3 formInputs">
            <label>Insira a Preço:</label>
            <input class="inputConfiguration w-25 text-center" type="number" name="product_price" placeholder="Preço" minlength="5" maxlength="255" required>
        </div>
        <div class="pt-3 formInputs">
            <label>Stock:</label>
            <input class="inputConfiguration w-25 text-center" type="number" name="stock" placeholder="Stock" min="1" required>
        </div>
        <div>
            <div class="pt-3 formInputs">
                <select id="categoryType" name="category_id">
                     <?php
                        foreach($categories as $category){
                            echo '<option value="'.$category["category_id"] .'">'.$category["category_name"] .'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="pt-3 formInputs">
                <select id="seasonType" name="season_id">
                     <?php
                        foreach($seasons as $season){
                            echo '<option value="'.$season["season_id"] .'">'.$season["season_name"] .'</option>';
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="pt-3">
            <button class="btn btn-success" type="submit" name="send">Inserir</button>
        </div>
    </form>