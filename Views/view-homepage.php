<?php
    require_once("Layout/header.php");
?>
    
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
            <div class="d-flex flex-row seasonalProductsDisplay seasonProductsPosition">
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
                        <button class="btn btn-success btn-rounded mb-2 addCartModal" type="button" data-toggle="modal" data-target="#modalLoginForm" data-product_id="<?php echo $seasonProduct["product_id"] ?>" data-stock="<?php echo $seasonProduct["stock"]?>">Adicionar</button>
                    </div>
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
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
                  <div class="modal-dialog bg-grey-500" role="document">
                    <form id="formModal" method="post" action="<?php echo ROOT . "/cart" ?>">
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
                              <input type="number" name="quantity" value="1" min="1" max="1" class="form-control validate" required>
                              <input type="hidden" name="product_id" value="">
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
        </div>
        <?php
            
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
                        <a href="<?php echo ROOT . "/category/" . $category["category_id"]; ?>">
                            <img class="ps-5" src="<?php echo ROOT . "/Images/" . $category["category_image"]; ?>">
                        </a>
                    </figure>
                </div>
            </div>
<?php
    if($categoryRow % $categoryCol == 0) { ?> </div> <?php } }
?>
        </div>
        <div>
            <h2 class="subtitlesStyle h1 text-center pt-3">Produtos:</h2>
<?php

    $randProductsCol = 3;
    $randProductsRow = 0;
    $widthCol = 12 / $randProductsCol;

    foreach($randProducts as $randProduct){
        if($randProductsRow % $randProductsCol == 0) { ?> <div class="row"> <?php } 
    $randProductsRow++; 
?>
        <div class="col-md-<?php echo $widthCol; ?>">
            <div class="card row bg-transparent text-center mainCategories">
                <div class="card-body w-25 dispositionItems pt-3 pb-3">
                    <h3 class="card-title"><?php echo $randProduct["product_name"] ?></h3>
                </div>
                <div class="productImagePosition">
                    <a href="<?php echo ROOT . '/productdetails/' . $randProduct["product_id"]; ?>">
                        <img class="card-image" src="<?php echo ROOT . "/Images/" . $randProduct["product_image"] ?>">
                    </a>
                </div>
                <div class="card-body w-25 dispositionItems pt-3 pb-1">
                    <p><?php echo $randProduct["product_price"] ?>€/kg</p>
                </div>
                <div class="pb-3">
                    <a class="btn btn-success" href="<?php echo ROOT . "/productdetails/" . $randProduct["product_id"] ?>">Detalhes
                    </a>
                </div>
            </div>
        </div>
<?php
    if($randProductsRow % $randProductsCol == 0) { ?> </div> <?php } }
?>
        </div>
    </main>
    
<?php
    require_once("Layout/footer.php");
?>