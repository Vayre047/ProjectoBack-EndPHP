<?php

    require("Layout/header.php");
    
?>

<div class="container pt-5">
    <div class="row pt-5">
        <div class="col col-sm">
            <h1 class="mainTitle pt-3"><?php echo $title; ?></h1>
            <form class="text-center pt-5" method="post" action="<?php echo ROOT;?>/delUpdUser">
                <div class="pt-3 formInputs">
                    <select id="user_id" name= "user_id" >
                        <?php
                            foreach($users as $user){
                                echo '<option value="'.$user["user_id"] .'">'.$user["user_firstName"] .' '.$user["user_lastName"] .'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="pt-3">
                    <button class="btn btn-success" type="submit" name="delete">Apagar</button>
                </div>
            </form>
        </div>
        <div class="col col-sm">
            <h1 class="mainTitle pt-3"><?php echo $titleSecondary; ?></h1>
            <div class="pt-3 ">
                    <?php
                        foreach($users as $user){
                    ?>
                        <button class="btn btn-success btn-rounded mb-2 updateUser" type="button" data-toggle="modal" data-target="#modalUpdateUser" data-user_id="<?php echo $user["user_id"] ?>"><?php echo $user["user_firstName"] .' '.$user["user_lastName"] ?></button>
                     <?php
                        }
                    ?>
            </div>
            <div class="modal fade" id="modalUpdateUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
                  <div class="modal-dialog bg-grey-500" role="document">
                    <form id="formModal" method="post" action="<?php echo ROOT . "/delUpdUser" ?>">
                        <div class="modal-content">
                          <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                                    <i class="fas fa-envelope prefix grey-text"></i>
                                    <input class="inputConfiguration w-25 text-center" type="text" name="firstName" value="" placeholder="Digite o seu nome" minlength="3" maxlength="72" required>
                                    <input class="inputConfiguration w-25 text-center" type="text" name="lastName" placeholder="Digite o seu apelido" minlength="3" maxlength="72" required>
                                    <input class="inputConfiguration w-25 text-center" type="email" name="email" placeholder="Digite o seu email" required>
                                    <input class="inputConfiguration w-25 text-center" type="password" name="password" placeholder="Digite a sua password" minlength="5" maxlength="255" required>
                                    <input class="inputConfiguration w-25 text-center" type="password" name="repeatPassword" placeholder="Digite novamento a sua password" minlength="5" maxlength="255" required>
                                    <input class="inputConfiguration w-25 text-center" type="text" name="address" placeholder="Digite a sua morada" minlength="10" maxlength="130" required>
                                    <input class="inputConfiguration w-25 text-center" type="text" name="postal_code" placeholder="Digite o seu código postal" minlength="4" maxlength="35" required>
                                    <input class="inputConfiguration w-25 text-center" type="text" name="city" placeholder="Digite a sua cidade" minlength="5" maxlength="40" required>
                                    <input type="text" name="user_id" value="">
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button class="btn btn-success pt-5" type="submit" name="update">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>        
    