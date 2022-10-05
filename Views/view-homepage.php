<?php
    require_once("Layout/header.php");
?>
<header>
     <div class="grid-container">
             <div class="sm-box sm-box--1">
                
            </div>
            <div class="sm-box sm-box--2 positionConfiguration">
                <ul class="primaryConfiguration">
                    <?php echo '<a href="' .ROOT. '/listproducts">
                        <button type="button" class="navbarButton">Productos</button>
                    </a>' ?>
                    <ul class="navbarList">
    <?php
        foreach($products as $product){
            echo '<li class="listConfiguration fst-italic"><a class="linkConfiguration fst-italic" href="' .ROOT. '/productdetails/' .$product["product_id"] . '">' . $product["product_name"] .'</a></li>';
        }
    ?>
                    </ul>
                </ul>
            </div>
            <div class="sm-box sm-box--3 positionConfiguration">
                <ul class="primaryConfiguration">
                    <button type="button" class="navbarButton">Categorias</button>
                    <ul class="navbarList">
    <?php
        foreach($categories as $category){
            echo '<li class="listConfiguration fst-italic"><a class="linkConfiguration fst-italic" href="' .ROOT. '/category/' .$category["category_id"] . '">' . $category["category_name"] .'</a></li>';
        }
    ?>
                    </ul>
                </ul>
            </div>
            <div class="sm-box sm-box--4 positionConfiguration">
                <ul class="primaryConfiguration">
                    <button type="button" class="navbarButton">
                        Estações
                    </button>
                    <ul class="navbarList">
    <?php
        foreach($seasons as $season){
            echo '<li class="listConfiguration"><a class="linkConfiguration" href="' .ROOT. '/season/' .$season["season_id"] . '">' . $season["season_name"] . '</a></li>';
        }
    ?>
                        </ul>
                    </ul>
            </div>
            <div class="sm-box sm-box--5">
                
            </div>
            <div class="pt-2 sm-box sm-box--6">
                
            </div>
            <div class="pt-2 sm-box sm-box--7">
                
            </div>
            <div class="sm-box sm-box--8">
                
            </div>
        </div>
    </header>
    <main class="pb-5">
        <div class="text-center pb-5">
            <h2 class="subtitlesStyle h1">Productos da Época: <?php echo $season["season_name"]; ?></h2>
<?php

    $seasonProducts = [];

    foreach($products as $product){
        if($product["season_id"] === $season["season_id"] ){
            array_push($seasonProducts, $product);
        }
    }
?>
            </div>  
            <div class="d-flex flex-row seasonProductsPosition">
<?php
    foreach ($seasonProducts as $seasonProduct) {
?>
            <div class="card text-center w-25 bg-transparent">
                <p class="h2"><?php echo $seasonProduct["product_name"] ?></p>
                <a href="<?php echo ROOT . '/productdetails/' . $seasonProduct["product_id"]; ?>">
                    <figure class="align-items-center">
                        <img src="<?php echo ROOT . "/Images/" . $seasonProduct["product_image"]; ?>" alt="Product Images" />
                    </figure>
                </a>
                <div>
                    <p><?php echo $seasonProduct["product_price"] ?>€/Kg</p>
                    <div class="text-center">
                        <a href="" class="btn btn-success btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Adicionar</a>
                    </div>
                </div>     
            </div>
                <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
                  <div class="modal-dialog bg-grey-500" role="document">
                    <form method="post" action="<?php echo ROOT . "/cart" ?>">
                        <div class="modal-content">
                          <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Adicionar ao Carrinho</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                              <i class="fas fa-envelope prefix grey-text"></i>
                              <label data-error="Wrong Quantity" data-success="right" for="quantity">Quantidade:</label>
                              <input type="number" name="quantity" value="1" min="1" max="<?php echo $seasonProduct["stock"]; ?>" class="form-control validate" required>
                              <input type="hidden" name="product_id" value="<?php echo $seasonProduct["product_id"]?>">
                            </div>
                          </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <?php echo '<a href="'.ROOT.'/cart">
                                        <button type="submit" name="send" class="btn btn-success" onclick="addProducts()">  
                                            Adicionar
                                        </button>
                                    </a>';
                                ?>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
        <?php
    
    if(intval($seasonProduct["stock"])>0){

?>
            
            
<?php
        }else{
            echo "<p>Esgotado</p>";
        }
    }
?>

        <div class="text-center">           
            <h2 class="subtitlesStyle h1 pt-2">Categorias:</h2>
<?php
    $categoryCol = 4;
    $categoryRow = 0;
    $widthCategoryCol = 12 / $categoryCol;

    foreach($categories as $category){
        if($categoryRow % $categoryCol == 0) { ?> <div class="row"> <?php } 
            $categoryRow++;
?>
            <div class="ps-5 pt-5 pb-5 col-md-<?php echo $widthCategoryCol ?>">
                <div class="row pt-3"> 
                    <figure class="mainCategories ps-5 col-md-4">
                        <img class="ps-5" src="<?php echo ROOT . "/Images/" . $category["category_image"]; ?>">
                    </figure>
                </div>
            </div>
<?php
    if($categoryRow % $categoryCol == 0) { ?> </div> <?php } }
?>
        </div>
    </main>
<?php
    require_once("Layout/footer.php");
?>