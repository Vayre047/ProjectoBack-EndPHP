<?php

    require("Layout/header.php");
    
?>
    <div class="container pt-5">
        <div class="row pt-5">
            <div class="col-sm">
                <p class="text-center"> Usuários</p>
            </div>
            <div class="col-sm">
                <p class="text-center"> Produtos </p>
            </div>
            <div class="col-sm">
                <p class="text-center"> Categorias </p>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-sm">
                <a class="text-center removeConfiguration" href="<?php echo ROOT . "/addUser" ?>"> Inserir novo empregado</a>
            </div>
            <div class="col-sm">
                <a class="text-center removeConfiguration" href="<?php echo ROOT . "/addProduct" ?>"> Inserir novo produto </a>
            </div>
            <div class="col-sm">
                <a class="text-center removeConfiguration" href="<?php echo ROOT . "/addCategory" ?>"> Inserir nova categoria </a>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-sm">
                <a class="text-center removeConfiguration" href="<?php echo ROOT . "/delUpdUser" ?>"> Apagar empregado</a>
            </div>
            <div class="col-sm">
                <a class="text-center removeConfiguration pt-5" href="<?php echo ROOT . "/delUpdProduct" ?>"> Apagar produto </a>
            </div>
            <div class="col-sm">
                <a class="text-center removeConfiguration" href="<?php echo ROOT . "/deleteCategory" ?>"> Apagar categoria </a>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-sm">
                <a class="text-center removeConfiguration" href="<?php echo ROOT . "/delUpdUser" ?>"> Actualizar empregado</a>
            </div>
            <div class="col-sm">
                <a class="text-center removeConfiguration" href="<?php echo ROOT . "/delUpdProduct" ?>"> Actualizar produto </a>
            </div>
        </div>
    </div>
<?php 

    require("Layout/footer.php");

?>