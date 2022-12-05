<?php
require 'user/logueo.php';
?>

<!DOCTYPE html>
<html lang="es">
    <?php require 'head.php'?>
<body>
    <form class="form" action="login.php" method="post">
            <div class="form__section">
                <h1 class="tittle">Logueo</h1>
            </div>
            <div class="form__section">
                <input class="form__input" type="email" name="email" placeholder="Email">
            </div>
            <div class="form__section">
                <input class="form__input" type="password" name="password" placeholder="Contraseña">
            </div>
            <div class="form__section">
                <input class="form__input form__submit" type="submit" name="login" value="Loguearse">
            </div>
            <div class="form__section form__section-down">
                <p class="txt">o en cambio</p><a class="volver" href="signup.php">Registrarse</a>
            </div>
        </form>
        <?php if(!empty($mensaje)): ?>
            <div class="user__box " id="user__box">
                <p class="user__txt " id="user__txt"><?= $mensaje ?><i class="fa-solid fa-face-grin-beam-sweat emoji"></i></p>
            </div>
        <?php endif; ?>
</body>
</html>