<?php
require 'user/register.php';
?>

<!DOCTYPE html>
<html lang="es">
    <?php require 'head.php'?>
    <script src="script2.js"></script>
<body>
        <form class="form" action="signup.php" method="post">
            <div class="form__section">
                <h1 class="tittle">Registrarse</h1>
            </div>
            <div class="form__section">
                <input class="form__input" type="text" name="name" placeholder="Nombre">
            </div>
            <div class="form__section">
                <input class="form__input" type="email" name="email" placeholder="Email">
            </div>
            <div class="form__section">
                <input class="form__input" type="password" name="password" placeholder="Contraseña">
            </div>
            <div class="form__section">
                <input class="form__input form__submit" id="user__button" type="submit" name="register" value="Registrarse">
            </div>
            <div class="form__section form__section-down">
                <p class="txt">o en cambio</p><a class="volver" href="login.php">Loguearse</a>
            </div>
        </form>
        
        
        <?php if(!empty($mensaje)): ?>
            <div class="user__box " id="user__box">
                <p class="txt " id="txt"><?= $mensaje ?><i class="fa-solid fa-face-grimace emoji"></i></p>
            </div>
        <?php endif; ?>
</body>
</html>