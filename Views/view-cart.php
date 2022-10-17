<?php

	require_once("Layout/header.php");
?>
	<p class="h1 text-center subtitlesStyle">Carrinho de Compras</p>
	
	<?php
		if (empty($_SESSION["cart"])) {
	?>
		<p class="text-center emptyCar">O carrinho está vazio</p>
	<?php
		}else{
	?>
	<div class="container text-center pb-5">
	<?php
		foreach($_SESSION["cart"] as $product){

	?>
	<div class="row">
	    <div class="col col-4">
	      <img src="<?php echo ROOT . "/Images/" . $product["product_image"]; ?>">
	    </div>
	    <div class="col col-4">
    		<p class="h3 titlePosition pt-4"><?php echo $product["product_name"]?></p>
    		<p class="h4">Quantidade:
    			<select>
				
		    		<?php for ($i = 1; $i <= $product["stock"]; $i++) { ?> 
		    			<option <?php if($product["quantity"] == $i){ echo "selected";}?> >
		    				<?php
		    					echo $i;
							?>
						</option>
					<?php
		    			}
		    		?>
	    		</select>
    		</p>
	    </div>
	    <div>
			<?php $total = 0 ?>
	    	<p class="h4">Total: <?php $total += ($product["quantity"] * $product["quantity"]) ?></p>
	    </div>
	    <div class="col d-flex">
			
	    </div>
	    <div class="col">
	      <button id="removeBtn" class="btn btn-secondary" type="button">Remover</button>
	    </div>
	  </div>
		<?php
			}
		?>
	</div>

	<?php
		}
	?>
<?php
	
	require_once("Layout/footer.php")

?>