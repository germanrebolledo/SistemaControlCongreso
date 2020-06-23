<!doctype html>

<?php  
    session_start();
?>

<html>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <title>Agenda del congreso</title>
  	</head>
  		<body bgcolor="E0DDDD">
    	<center><h1>Sistema de Control Congreso</h1><br>
    			<h2>Agenda del congreso</h2></center>
                <?php  
                echo "<center><h3>Usuario activo :  " . $_SESSION["usuario"] . "</h3><br></center>";
                ?>
    	<form>
    	<center>
    		<br><br>
    		<input type="submit" name="Seleccionar" value="Seleccionar eventos" formaction="http://localhost/congreso/seleccionev.php">
    		<br>
    		<br>
    		<input type="submit" name="Consultar" value="Consultar Agenda" formaction="http://localhost/congreso/consultaagenda.php">
    	</center>
    </form>
</body>