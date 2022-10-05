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
    
<?php
    require_once("Layout/footer.php");
?>