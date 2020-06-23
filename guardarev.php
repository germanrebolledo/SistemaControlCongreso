<!DOCTYPE html>
<html>
<head>
	<title>Guardado de eventos</title>
</head>
<body>
	
	<?php 
		session_start();
		$con = @mysqli_connect('localhost', 'root', '');
		if($con) {
			echo "Conexion establecida<br>";
			$bas = @mysqli_select_db($con, 'scc');
				if($bas) {
					echo "Base de datos encontrada<br>";
					$nom = $_SESSION["usuario"];

					$e11 = 1;
					$e12 = $_POST['ev12cb'];
					$e13 = $_POST['ev13cb'];
					$e14 = $_POST['ev14cb'];
					$e15 = $_POST['ev15cb'];
					$e16 = $_POST['ev16cb'];

					$e21 = $_POST['ev21cb'];
					$e22 = $_POST['ev22cb'];
					$e23 = $_POST['ev23cb'];
					$e24 = $_POST['ev24cb'];
					$e25 = $_POST['ev25cb'];
					$e26 = $_POST['ev26cb'];

					$e31 = $_POST['ev31cb'];
					$e32 = $_POST['ev32cb'];
					$e33 = $_POST['ev33cb'];
					$e34 = $_POST['ev34cb'];
					$e35 = $_POST['ev35cb'];
					$e36 = $_POST['ev36cb'];
					
					$sql = "INSERT INTO agenda VALUES('$nom', '$e11', '$e12', '$e13', '$e14', '$e15', '$e16', 
							'$e21', '$e22', '$e23', '$e24', '$e25', '$e26', '$e31', '$e32', '$e33', '$e34', '$e35', '$e36')";
					
					$eje = @mysqli_query($con, $sql);
					
					if($eje) {
						echo "Registro guardado";
					}
					else {
						echo "Registro no guardado";
					}
				}
					
				
				else {
					echo "Base de datos no encontrada";
				}
		}
		else {
			echo "Conexion fallida";	
		}
		echo "<br><br>";
		echo "<a href=\"portafolios.html\">Pagina principal</a>";
	 ?>

</body>
</html>