<?php

    require("Layout/header.php");

?>

<div>
    <p class="mainTitle h3 pt-3"><?php echo $titleSecondary; ?></p>
    <div class="pt-3">
    	<form id="formUpdateUser" method="post" action="<?php echo ROOT;?>/updateUser">
    		<input type="hidden" name="user_id" value="">
    		<div class="pt-3">
    			<label>
    				Nome:
    			</label>
    			<input type="text" name="user_firstName" placeholder="Introduza o nome novo">
    		</div>
    		<div class="pt-3">
    			<label>
    				Apelido:
    			</label>
    			<input type="text" name="user_lastName" placeholder="Introduza o apelido novo">
    		</div>
    		<div class="pt-3">
    			<label>
    				E-mail:
    			</label>
    			<input type="email" name="user_email" placeholder="Introduza novo e-mail">
    		</div>
    		<div class="pt-3">
    			<label>
    				Password:
    			</label>
    			<input type="password" name="password" placeholder="Introduza a nova password">
    		</div>
    		<div class="pt-3">
    			<label>
    				Repita Password:
    			</label>
    			<input type="password" name="password" placeholder="Introduza novamente a nova password">
    		</div>
    		<div class="pt-3">
    			<label>
    				Cidade:	
    			</label>
    			<input type="text" name="city" placeholder="Introduza a nova cidade">
    		</div>
    		<div class="pt-3">
    			<label>
    				Morada:
    			</label>
    			<input type="text" name="user_address" placeholder="Introduza a nova morada">
    		</div>
    		<div class="pt-3">
    			<label>
    				Código Postal:
    			</label>
    			<input type="text" name="postal-code" placeholder="Introduza o novo código postal">
    		</div>
    		<button type="submit" class="btn btn-success">Alterar</button>
    	</form>
    </div>
</div>