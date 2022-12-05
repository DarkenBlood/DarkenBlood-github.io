<?php
  session_start();

  require 'user/database.php';

  if (isset($_SESSION['user_id'])) {
    $consulta = $mysql->prepare('SELECT id, name, email, password, dulces FROM usuarios WHERE id = :id');
    $consulta->bindParam(':id', $_SESSION['user_id']);
    $consulta->execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($resultado) > 0) {
        $user = $resultado;
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
    <?php require 'head.php'?>
<body>
	<?php if(!empty($user)): ?>
		<?php require 'header.php' ?>
        <?php require 'user-session.php' ?>
        <div class="perfil">
            <h1 class="txt">Sesión iniciada, para cerrar sesión: </h1><a class="link" href="user/logout.php">Cerrar sesión</a>
        </div>
	<?php else: ?>
    <main>
        <div class="register">
            <h1 class="tittle">Tienda de dulces <i class="fa-solid fa-face-laugh-beam emoji"></i><i class="fa-solid fa-face-smile-relaxed emoji"></i></h1>
            <div class="register__list">
                <div class="register__section">
                    <a class="link" href="login.php">Logearse</a>
                </div>
                <div class="register__section">
                    <p class="txt">|</p>
                </div>
                <div class="register__section">
                    <a class="link" href="signup.php">Registrarse</a>
                </div>
            </div>
        </div>
    </main>
	<?php endif; ?>
</body>
</html>