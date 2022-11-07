<?php

    require("Layout/header.php");
    
?>

<p class="text-center h3 pt-2 mainTitle"><?php echo $title; ?></p>
<div>
    <form class="text-center pt-5" method="post" action="<?php echo ROOT;?>/delUpdProducts">
        <div class="pt-3 formInputs">
            <select id="product_id" name="product_id" >
                <?php
                    foreach($categories as $category){
                        echo '<option value="'.$category["category_id"] .'">'.$category["category_name"] .'</option>';
                    }
                ?>
            </select>
        </div>
        <div class="pt-3">
            <button class="btn btn-success" type="submit" name="delete">Apagar</button>
        </div>
    </form>
</div>