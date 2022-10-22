<?php

	require_once("Layout/header.php");

?>

	<div class="text-center">
		<p class="h1 subtitlesStyle"><?php echo $onecategory[0]["category_name"]; ?></p>
		<?php
			foreach($eachcategories as $eachcategory){
		?>	
		
		<div class="pt-3">
			<p><?php echo $eachcategory["product_name"] ?></p>
			<img src="<?php echo ROOT . "/Images/" . $eachcategory["product_image"] ?>" alt="<?php $eachcategory["product_image"] ?>">
		</div>

		<?php
			}
		?>
		<p><?php echo $onecategory[0]["category_description"]; ?></p>
	</div>

<?php

	require("Layout/footer.php");

?>