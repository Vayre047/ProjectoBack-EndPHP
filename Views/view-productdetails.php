<?php
	
	require_once("Layout/header.php");

?>
	
	<div class="card cardConfiguration bg-transparent w-25">
	  <img class="pt-3 pe-2" src="<?php echo ROOT . "/Images/" . $productDetail["product_image"]; ?>" class="card-img-top" alt="Product Image Detail">
	  <div class="card-body text-center">
	    <p class="h3"><?php echo $productDetail["product_name"]; ?></p>
	    <p class="card-text"><?php echo $productDetail["product_description"]; ?></p>
	    <p><?php echo $productDetail["product_price"]; ?> €/Kg</p>
		<div>
			<input type="number" name="quantity" value="1" min="1" max="<?php echo $productDetail["stock"]; ?>">
			<div class="pt-3 pb-3">
				<?php echo '<a class="btn btn-success" href="'.ROOT.'/cart">
						Adicionar ao Carrinho
					</a>';
				?>
			</div>
		</div>
	  </div>
	</div>

<?php
	
	require("Layout/footer.php");

?>