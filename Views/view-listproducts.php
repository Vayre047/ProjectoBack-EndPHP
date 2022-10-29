<?php

	require("Layout/header.php");
	
?>
	<p class="h1 text-center pt-3 mainTitle">Lista de todos os Produtos</p>
	<p class="h1 text-center pt-5 pb-5 categoriesTitle"><?php echo $listAnimalsProducts[0]["category_name"]; ?></p>
	<div class='container'>
		<div class="row">
		<?php
			foreach($listAnimalsProducts as $listAnimalsProduct){
		?>
			<div class="col-sm">
				<a href="<?php echo ROOT . '/productdetails/' . $listAnimalsProduct["product_id"]; ?>">
					<img class="imageDisposition" src="<?php echo ROOT . "/Images/". $listAnimalsProduct["product_image"]; ?>" alt="Nome das Categorias" />
				</a>
				<div class="pt-3 ps-4">
					<p><?php echo $listAnimalsProduct["product_price"] ?> kg/€</p>
				</div>
			</div>
		<?php
			}
		?>
		</div>
	
		<p class="h1 text-center pt-5 pb-5 categoriesTitle"><?php echo $listFruitsProducts[0]["category_name"]; ?></p>
		<div class="row">
		<?php
			foreach($listFruitsProducts as $listFruitsProduct){
		?>
			<div class="col-sm">
				<a href="<?php echo ROOT . '/productdetails/' . $listFruitsProduct["product_id"]; ?>">
					<img class="imageDisposition" src="<?php echo ROOT . "/Images/". $listFruitsProduct["product_image"]; ?>" alt="Nome das Categorias" />
				</a>
				<div class="pt-3 ps-4">
					<p><?php echo $listAnimalsProduct["product_price"] ?> kg/€</p>
				</div>
			</div>
		<?php
			}
		?>
		</div>

		<p class="h1 text-center pt-5 pb-5 categoriesTitle"><?php echo $listDriedFruitsProducts[0]["category_name"]; ?></p>
		<div class="row">
		<?php
			foreach($listDriedFruitsProducts as $listDriedFruitsProduct){
		?>
			<div class="col-sm">
				<a href="<?php echo ROOT . '/productdetails/' . $listDriedFruitsProduct["product_id"]; ?>">
					<img src="<?php echo ROOT . "/Images/". $listDriedFruitsProduct["product_image"]; ?>" alt="Nome das Categorias" />
				</a>
				<div class="pt-3 ps-4">
					<p><?php echo $listAnimalsProduct["product_price"] ?> kg/€</p>
				</div>
			</div>
		<?php
			}
		?>
		</div>

		<p class="h1 text-center pt-5 pb-5 categoriesTitle"><?php echo $listVegetablesProducts[0]["category_name"]; ?></p>
		<div class="row">
		<?php
			foreach($listVegetablesProducts as $listVegetablesProduct){
		?>
			<div class="col-sm">
				<a href="<?php echo ROOT . '/productdetails/' . $listVegetablesProduct["product_id"]; ?>">
					<img src="<?php echo ROOT . "/Images/". $listVegetablesProduct["product_image"]; ?>" alt="Nome das Categorias" />
				</a>
				<div class="pt-3 ps-4">
					<p><?php echo $listAnimalsProduct["product_price"] ?> kg/€</p>
				</div>
			</div>
		<?php
			}
		?>
		</div>
	<?php

		require("Layout/footer.php");

?>