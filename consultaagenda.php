<?php  
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Consulta de agenda</title>
</head>
<body>
	<?php 
		$cnx = @mysqli_connect('localhost', 'root', '');
		if($cnx) {
			$bas = @mysqli_select_db($cnx, 'scc');
			if($bas) {
				$nom = $_SESSION["usuario"];
				$sql = "SELECT * FROM agenda WHERE nombre = '$nom'";
				$eje = @mysqli_query($cnx, $sql);
				if ($eje) {
					if($eje) {
					while($row = mysqli_fetch_row($eje)) {
					echo "Usuario : ",$row[0], "<br>"; 
					echo "<br>===================<br>Dia 1 <br>"; 
					if($row[1]==1) {
						echo "Evento 1 - 9:00 a 10:00 horas<br>";
					}
					if($row[2]==1) {
						echo "Evento 2 - 10:00 a 11:00 horas<br>";
					}
					if($row[3]==1) {
						echo "Evento 3 - 11:00 a 12:00 horas<br>";
					}
					if($row[4]==1) {
						echo "Evento 4 - 15:00 a 16:00 horas<br>";
					}
					if($row[5]==1) {
						echo "Evento 5 - 16:00 a 17:00 horas<br>";
					}
					if($row[6]==1) {
						echo "Evento 6 - 17:00 a 18:00 horas<br>";
					}
					
					echo "<br>===================<br>Dia 2 <br>"; 

					if($row[7]==1) {
						echo "Evento 1 - 9:00 a 10:00 horas<br>";
					}
					if($row[8]==1) {
						echo "Evento 2 - 10:00 a 11:00 horas<br>";
					}
					if($row[9]==1) {
						echo "Evento 3 - 11:00 a 12:00 horas<br>";
					}
					if($row[10]==1) {
						echo "Evento 4 - 15:00 a 16:00 horas<br>";
					}
					if($row[11]==1) {
						echo "Evento 5 - 16:00 a 17:00 horas<br>";
					}
					if($row[12]==1) {
						echo "Evento 6 - 17:00 a 18:00 horas<br>";
					}
					echo "<br>===================<br>Dia 3 <br>"; 
					if($row[13]==1) {
						echo "Evento 1 - 9:00 a 10:00 horas<br>";
					}
					if($row[14]==1) {
						echo "Evento 2 - 10:00 a 11:00 horas<br>";
					}
					if($row[15]==1) {
						echo "Evento 3 - 11:00 a 12:00 horas<br>";
					}
					if($row[16]==1) {
						echo "Evento 4 - 15:00 a 16:00 horas<br>";
					}
					if($row[17]==1) {
						echo "Evento 5 - 16:00 a 17:00 horas<br>";
					}
					if($row[18]==1) {
						echo "Evento 6 - 17:00 a 18:00 horas<br>";
					}
				}
			}
			echo "<a href=\"portafolios.html\">Portafolio de usuario</a>";
				} 
			} else {echo "Base no encontrada"; }
		} else { echo "Servidor no encontrado"; }
	?>
</body>
</html>