<!DOCTYPE html>
<html>
<head>
	<title>Guardado de datos</title>
</head>
<body>
	
	<?php 
		$con = @mysqli_connect('localhost', 'root', '');
		if($con) {
			echo "Conexion establecida<br>";
			$bas = @mysqli_select_db($con, 'scc');
				if($bas) {
					echo "Base de datos encontrada<br>";
					$nom = $_POST['textnom'];
					$app = $_POST['textapp'];
					$apm = $_POST['textapm'];
					$mai = $_POST['textmai'];
					$pas = $_POST['textpas'];
					$asi = $_POST['asisop'];
					$for = $_POST['formop'];
					$sql = "INSERT INTO usuarios VALUES('$nom', '$app', '$apm', '$mai', '$for', '$asi', '$pas')";
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
		echo "<a href=\"index.html\">Pagina principal</a>";
	 ?>

</body>
</html>