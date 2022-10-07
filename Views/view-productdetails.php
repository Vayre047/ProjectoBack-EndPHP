<?php
	
	require_once("Layout/header.php");

?>
	
	<div class="card cardPosition bg-transparent w-25">
	  <img class="pt-3 pe-2" src="<?php echo ROOT . "/Images/" . $productDetail["product_image"]; ?>" class="card-img-top" alt="Product Image Detail">
	  <div class="card-body text-center">
	    <p><?php echo $productDetail["product_name"]; ?></p>
	    <p class="card-text"><?php echo $productDetail["product_description"]; ?></p>
	    <p><?php echo $productDetail["product_price"]; ?> €/Kg</p>
		<div>
			<input type="number" name="quantity" min="0" max="<?php echo $productDetail["stock"]; ?>">
			<div class="pt-3 pb-3">
				<?php echo '<a href="'.ROOT.'/cart">
					<button type="submit" name="send" class="btn btn-success" onclick="addProducts()">  
						Adicionar ao carrinho
						</button>
					</a>';
				?>
			</div>
		</div>
	  </div>
	</div>

<?php
	
	require("Layout/footer.php");

?>