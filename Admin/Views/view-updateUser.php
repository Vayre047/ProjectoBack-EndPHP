<?php
    require("Layout/header.php");
?>

<div>
    <p class="mainTitle h3 pt-3"><?php echo $titleSecondary; ?></p>
	<?php
	if(isset($message)){
        echo '<p class="text-center" role="alert">' .$message. '</p>';
	?>
	<a href="<?php echo ROOT . '/updateUser/' . $id; ?>" > Voltar ao formulário </a>
	<?php
    }else{
	?>
		<div class="pt-3">
			<form id="formUpdateUser" method="post" action="<?php echo ROOT;?>/updateUser">
				<input type="hidden" name="user_id" value="">
				<div class="pt-3">
					<label>
						Nome:
					</label>
					<input type="text" name="user_firstName" placeholder="<?php if(isset($users["user_firstName"])){echo $users["user_firstName"];}?>">
				</div>
				<div class="pt-3">
					<label>
						Apelido:
					</label>
					<input type="text" name="user_lastName" placeholder="<?php if(isset($users["user_firstName"])){ echo $users["user_lastName"];}?>">
				</div>
				<div class="pt-3">
					<label>
						E-mail:
					</label>
					<input type="email" name="user_email" placeholder="<?php if(isset($users["user_firstName"])){ echo $users["user_email"];}?>">
				</div>
				<div class="pt-3">
					<label>
						Password:
					</label>
					<input type="password" name="password" placeholder="Introduza password">
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
					<input type="text" name="city" placeholder="<?php if(isset($users["user_firstName"])){echo $users["city"];}?>">
				</div>
				<div class="pt-3">
					<label>
						Morada:
					</label>
					<input type="text" name="user_address" placeholder="<?php if(isset($users["user_firstName"])){echo $users["user_address"];}?>">
				</div>
				<div class="pt-3">
					<label>
						Código Postal:
					</label>
					<input type="text" name="postal_code" placeholder="<?php if(isset($users["user_firstName"])){echo $users["postal_code"];}?>">
				</div>
				<button type="submit" class="btn btn-success" name="update">Alterar</button>
			</form>
		</div>
	<?php
	}
	?>
</div>