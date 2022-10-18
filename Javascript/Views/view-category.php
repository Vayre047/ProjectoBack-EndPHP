<?php

	require_once("Layout/header.php");

?>

	<div class="text-center">
		<p class="h1 subtitlesStyle"><?php echo $onecategory[0]["category_name"]; ?></p>
		<p><?php echo $onecategory[0]["category_description"]; ?></p>
	</div>

<?php

	require("Layout/footer.php");

?>