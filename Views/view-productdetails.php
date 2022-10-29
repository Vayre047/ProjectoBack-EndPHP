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
			<div class="pt-3 pb-3">
				<form method="post" action="<?php echo ROOT . "/cart" ?>">
				<div>
					<div>
						<input type="number" name="quantity" value="1" min="1" max="<?php echo $productDetail["stock"]; ?>">
						<input type="hidden" name="product_id" value="<?php echo $productDetail["product_id"]; ?>">
					</div>
					<div class="d-flex justify-content-center pt-3">
						<button type="submit" name="send" class="btn btn-success">  
							Adicionar
						</button>
					</div>
				</form>
			</div>
		</div>
	  </div>
	</div>

<?php
	
	require_once("Views/Layout/footer.php");

?>