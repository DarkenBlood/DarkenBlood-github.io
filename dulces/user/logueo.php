<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: /dulces');
}

require 'database.php';

if(isset($_POST['login'])){
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $consulta = $mysql->prepare('SELECT id, email, password FROM usuarios WHERE email = :email');
        $consulta->bindParam(':email', $_POST['email']);
        $consulta->execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    
        $mensaje = '';
        if (is_countable($resultado) > 0 && $_POST['password'] == $resultado['password']) {
            $_SESSION['user_id'] = $resultado['id'];
            header("Location: /dulces");
        } else {
            $mensaje = 'Datos incorrectos';
        }
    } else {
        $mensaje = 'Datos vacíos';
    }
}
?>