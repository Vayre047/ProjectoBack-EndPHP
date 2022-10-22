<?php

    require("Models/model-languages.php");

    $modelLanguages = new Languages();

	$languages = $modelLanguages->getLanguage([$id]);
	
	require("Views/Layout/footer.php");

?>