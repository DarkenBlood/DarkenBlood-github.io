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
    
    $id = $_SESSION['user_id'];

    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $consulta = $mysql->query($sql);
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
    <?php require 'head.php'?>
<body>
    <?php require 'header.php'?>
    <?php require 'user-session.php' ?>
    <main class="elemento-flex">

        <div class="buscador__container">
            <h1 class="tittle">Buscar:</h1>
            <input class="buscador__input" type="text" id="buscador" name="buscador" placeholder="Buscar">
        </div>
        
        <script src="buscador.js"></script>

        <form class="form-box" name="form" action="guardar.php" method="POST">
            <input type="hidden" id="id" name="id" value="<?php echo $resultado['id']; ?>">
            <div class="checkbox-container">

                <div class="checkbox-item articulo">
                    <div class="flex">
                        <h1 class="titulo__txt">Chocolate</h1>
                        <div class="separador"></div>
                        <img class="dulce" src="chocolate.png" alt="solate">
                        <div class="separador"></div>
                        <label class="checkbox-inline txt">
                            <input class="checkbox-input" type="checkbox" id="dulces[]" name="dulces[]" value=",Chocolate x" <?php if(strpos($resultado['dulces'], "Chocolate")!== false) echo 'checked'; ?>>  Añadir
                            <div class="cant-content">
                                <input class="cant" id="dulces[]" type="text" name="dulces[]" placeholder="Cantidad" required="" pattern="[0-9]+" maxlength="1">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="checkbox-item articulo">
                    <div class="flex">
                        <h1 class="titulo__txt">Muffing</h1>
                        <div class="separador"></div>
                        <img class="dulce" src="muffing.png" alt="solate">
                        <div class="separador"></div>
                        <label class="checkbox-inline txt">
                            <input class="checkbox-input" type="checkbox" id="dulces[]" name="dulces[]" value=",Muffing x" <?php if(strpos($resultado['dulces'], "Muffing")!== false) echo 'checked'; ?>> Añadir
                            <div class="cant-content">
                                <input class="cant" id="dulces[]" type="text" name="dulces[]" placeholder="Cantidad">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="checkbox-item articulo">
                    <div class="flex">
                        <h1 class="titulo__txt">Chupetín</h1>
                        <div class="separador"></div>
                        <img class="dulce" src="chupetin.png" alt="solate">
                        <div class="separador"></div>
                        <label class="checkbox-inline txt">
                            <input class="checkbox-input" type="checkbox" id="dulces[]" name="dulces[]" value=",Chupetín x" <?php if(strpos($resultado['dulces'], "Chupetín")!== false) echo 'checked'; ?>> Añadir
                            <div class="cant-content">
                                <input class="cant" id="dulces[]" type="text" name="dulces[]" placeholder="Cantidad">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="checkbox-item articulo">
                    <div class="flex">
                        <h1 class="titulo__txt">Caramelos</h1>
                        <div class="separador"></div>
                        <img class="dulce" src="caramelo.png" alt="solate">
                        <div class="separador"></div>
                        <label class="checkbox-inline txt">
                            <input class="checkbox-input" type="checkbox" id="dulces[]" name="dulces[]" value=",Caramelos x" <?php if(strpos($resultado['dulces'], "Caramelos")!== false) echo 'checked'; ?>>  Añadir
                            <div class="cant-content">
                                <input class="cant" id="dulces[]" type="text" name="dulces[]" placeholder="Cantidad">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="checkbox-item articulo">
                    <div class="flex">
                        <h1 class="titulo__txt">Chicles</h1>
                        <div class="separador"></div>
                        <img class="dulce" src="chicle.png" alt="solate">
                        <div class="separador"></div>
                        <label class="checkbox-inline txt">
                            <input class="checkbox-input" type="checkbox" id="dulces[]" name="dulces[]" value=",Chicles x" <?php if(strpos($resultado['dulces'], "Chicles")!== false) echo 'checked'; ?>> Añadir
                            <div class="cant-content">
                                <input class="cant" id="dulces[]" type="text" name="dulces[]" placeholder="Cantidad">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="checkbox-item articulo">
                    <div class="flex">
                        <h1 class="titulo__txt">Helado</h1>
                        <div class="separador"></div>
                        <img class="dulce" src="helado.png" alt="solate">
                        <div class="separador"></div>
                        <label class="checkbox-inline txt">
                            <input class="checkbox-input" type="checkbox" id="dulces[]" name="dulces[]" value=",Helado x" <?php if(strpos($resultado['dulces'], "Helado")!== false) echo 'checked'; ?>> Añadir
                            <div class="cant-content">
                                <input class="cant" id="dulces[]" type="text" name="dulces[]" placeholder="Cantidad">
                            </div>
                        </label>
                    </div>
                </div>

                <div class="checkbox-item articulo">
                    <div class="flex">
                        <h1 class="titulo__txt">Dona</h1>
                        <div class="separador"></div>
                        <img class="dulce" src="dona.png" alt="solate">
                        <div class="separador"></div>
                        
                        <label class="checkbox-inline txt">
                            <input class="checkbox-input" type="checkbox" id="dulces[]" name="dulces[]" value=",Dona x"  <?php if(strpos($resultado['dulces'], "Dona")!== false) echo 'checked'; ?>> Añadir
                            <div class="cant-content">
                                <input class="cant" id="dulces[]" type="text" name="dulces[]" placeholder="Cantidad">
                            </div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex__button">
                <button type="submit" class="guardar">Agregar al carrito</button>
            </div>
        </form>
    </main>
</body>
</html>