<?php

    require("Layout/header.php");

?>
    <div>
        <form action="" method="post">
            <label>
                <p>E-mail do Empregado</p>
                <input type="email" name="employerEmail" placeholder="Coloque o seu e-mail">
            </label>
            <label>
                <p>Password do Empregado</p>
                <input type="password" name="employerPassword" placeholder="Coloque a sua password">
            </label>
        </form>
    </div>

<?php

    require("/Layout/footer.php");

?>