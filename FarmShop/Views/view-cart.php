<?php

	require_once("Layout/header.php");
?>
	<p class="h1 text-center subtitlesStyle">Carrinho de Compras</p>
	
	<?php
		if (!$product) {
	?>
		<p class="text-center emptyCar">O carrinho está vazio</p>
	<?php
		}else{
	?>
	<div class="container text-center pb-5">
	  <div class="row">
	    <div class="col col-4">
	      <img src="<?php echo ROOT . "/Images/" . $product["product_image"]; ?>">
	    </div>
	    <div class="col col-4">
    		<p class="h3 titlePosition pt-4"><?php echo $product["product_name"]?></p>
    		<p class="h4">Quantidade:
    			<select>
		    		<?php for ($i = 0; $i <= $product["stock"]; $i++) { ?> 
		    			<option>
		    				<?php
		    					echo $_POST["quantity"];
							?>
						</option>
					<?php
		    			}
		    		?>
	    		</select>
    		</p>
    		<?php  ?>
	    </div>
	    <div>
	    	
	    </div>
	    <div class="col d-flex">
	    	
	       
	    </div>
	    <div class="col">
	      <button id="removeBtn" class="btn btn-secondary" type="button">Remover</button>
	    </div>
	  </div>
	</div>

	<?php
		}
	?>
<?php
	
	require_once("Layout/footer.php")

?>