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
                <div class=" pt-5">
                    <?php echo '<a href="' .ROOT. '/">
                        <button class="btn btn-success" type="submit" name="delete">Apagar</button>
                    </a>'?>
                </div>
            </form>
        </div>
        <div class="col col-sm">
            <h1 class="mainTitle pt-3"><?php echo $titleSecondary; ?></h1>
            <div class="pt-3">
                    <?php
                        foreach($users as $user){
                    ?>
                        <a href="<?php echo ROOT . "/updateUser" ?>" class="btn btn-success btn-rounded mb-2 updateUser" data-user_id="<?php echo $user["user_id"] ?>"><?php echo $user["user_firstName"] .' '.$user["user_lastName"] ?></a>
                     <?php
                        }
                    ?>
            </div>
        </div>
    </div>
</div>        
    