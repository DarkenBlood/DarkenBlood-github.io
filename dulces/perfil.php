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
    <?php require 'header.php' ?>
    <?php require 'user-session.php' ?>
    <div class="perfil">
        <p class="tittle dulces"><b>Nombre:</b> <?= $user['name']; ?></p>
        <p class="tittle dulces"><b>Email:</b> <?= $user['email']; ?></p>
        <p class="tittle dulces"><b>Dulces:</b> <?= $user['dulces']; ?></p>
    </div>
</body>
</html>