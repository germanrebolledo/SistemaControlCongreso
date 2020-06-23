<?php  
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Logeo</title>
</head>
<body>
	<?php 
		$cnx = @mysqli_connect('localhost', 'root', '');
		if($cnx) {
			$bas = @mysqli_select_db($cnx, 'scc');
			if($bas) {
				$use = $_POST['textmai'];
				$cla = $_POST['textpas'];
				$sql = "SELECT * FROM usuarios WHERE email = '$use'";
				$eje = @mysqli_query($cnx, $sql);
				if ($eje) {
					$ren = mysqli_fetch_row($eje);
					if($ren[3]==$use) {
						if($ren[6]==$cla) {
							echo "Acceso concedido";
							$_SESSION["usuario"] = "$ren[0]";
							echo"<br><br>";
							echo "Iniciaste sesion como " . $_SESSION["usuario"] . "  <br>";
							echo "<br><br>";
							echo "<a href=\"portafolios.html\">Portafolio de usuario</a>";
						} else { echo "Error en la contraseña"; }
					}else { echo "Usuario no encontrado"; }
				} else { echo ""; 	}
			} else {echo "Base no encontrada"; }
		} else { echo "Servidor no encontrado"; }
	?>
</body>
</html>