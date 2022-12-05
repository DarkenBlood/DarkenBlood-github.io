<?php
	
	require 'user/database.php';
	
    $id = $_POST['id'];
	$dulces = isset($_POST['dulces']) ? $_POST['dulces'] : null;
	
	$arrayDulces = null;
	
	$num_array = count($dulces);
	$contador = 0;
	
	if($num_array>0){
		foreach ($dulces as $key => $value) {
			if ($contador != $num_array-1)
			$arrayDulces .= $value.' ';
			else
			$arrayDulces .= $value;
			$contador++;
		}
	}
    $sql = "UPDATE usuarios SET dulces='$arrayDulces' WHERE id = '$id'";
	$resultado = $mysql->query($sql);
	
?>

<html lang="es">
    <?php require 'head.php'?>
	<body>
		<script>
			setTimeout(function(){
				window.location.href = 'dulces.php';
			}, 0000);
		</script>
	</body>
</html>