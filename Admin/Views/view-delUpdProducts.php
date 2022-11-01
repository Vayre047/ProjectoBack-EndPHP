<?php

    require("Layout/header.php");
    
?>

<p class="text-center h3 pt-2 mainTitle"><?php echo $title; ?></p>
<div>
	<form class="text-center pt-5" method="post" action="<?php echo ROOT;?>/delUpdProducts">
        <div class="pt-3 formInputs">
            <select id="product_id" name="product_id" >
                <?php
                    foreach($products as $product){
                        echo '<option value="'.$product["product_id"] .'">'.$product["product_name"] .'</option>';
                    }
                ?>
            </select>
        </div>
        <div class="pt-3">
            <button class="btn btn-success" type="submit" name="delete">Apagar</button>
        </div>
    </form>
</div>