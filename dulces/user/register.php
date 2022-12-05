<?php
require 'database.php';

$mensaje = '';

if(isset($_POST['register'])){ 
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $consulta = "INSERT INTO usuarios(name, email, password) VALUES (:name, :email, :password)";
        $resultado = $mysql->prepare($consulta);
        $resultado->bindParam(':name', $_POST['name']);
        $resultado->bindParam(':email', $_POST['email']);
        $resultado->bindParam(':password', $_POST['password']);
    
        if($resultado->execute()){
            $mensaje = 'Usuario creado';
        } else{
            $mensaje = 'Error';
        }
    } else {
        $mensaje = 'Datos vacíos';
    }
}

?>
<script src="script2.js"></script>