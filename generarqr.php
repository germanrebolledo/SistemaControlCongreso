<!doctype html>

<?php  
	session_start();
?>

<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>Generar Codigo QR</title>
 </head>
 
 <body>
    <center><h1>Sistema de Control Congreso</h1><br>
    		<h2>Generar QR</h2></center>
    		<?php
    			$activo = $_SESSION["usuario"];   
				echo "<center><h3>Usuario activo :  " . $activo . "</h3><br></center>";
	 		?>

	<div class='container' >
	<form method='post' id="generar">
	<div class='row'>
	<div class='col-md-4'>
	<div class="form-group">
			<label for="textnom">Nombre</label>
			<input type="text" class="form-control" id="textnom" placeholder="Nombre" required>
			<br>
			<label for="textmai">Correo electronico</label>
			<input type="text" class="form-control" id="textmai"  placeholder="Ingresa tu correo" required>
	</div>
	</div>
	
	<div class='col-md-4'>
		  <div class="form-group">
			<label for="sizeqr">Tamaño</label>
			<select class='form-control' id='sizeqr'>
				<option value='100'>100 px</option>
				<option value='200' selected>200 px</option>
				<option value='300'>300 px</option>
				<option value='400'>400 px</option>
				<option value='500'>500 px</option>
			</select>
			<br>
				<button type="submit" class="btn btn-primary">Generar QR</button>
		  </div>
		</form>		  
	</div>
	<div class='col-md-4'>
		<div class='result'>
			
		</div>
	</div>
	</div> 
	</div>
 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		$( "#generar" ).submit(function( event ) {
			var textnom=$("#textnom").val();
			var textmai=$("#textmai").val();
			var sizeqr=$("#sizeqr").val();
			parametros={"textnom":textnom, "textmai":textmai, "sizeqr":sizeqr};
			 $.ajax({
				type: "POST",
				url: "qr.php",
				data: parametros,
				success: function(datos){
					$(".result").html(datos);
				}
			 })
		  event.preventDefault();
		});
	</script>
</body>