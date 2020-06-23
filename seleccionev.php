<!doctype html>

<?php  
	session_start();
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>Seleccionar eventos</title>
 </head>
 
 <body>
    <center><h1>Sistema de Control Congreso</h1><br>
    		<h2>Agenda - Seleccionar eventos</h2></center>
    		<?php  
				echo "<center><h3>Usuario activo :  " . $_SESSION["usuario"] . "</h3><br></center>";
	 		?>
	 		<br>
	<div class='container' >
	<form method='post' id="seleccionar">
	<div class='row'>
	<div class='col-md-3'>
	<div class="form-group">
		<label for="dia1">Dia 1</label>
		<br>
		<label for="ev11cb">Evento 1 - 9:00 a 10:00</label>
		  	<select class='form-control' id='ev11cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev12cb">Evento 2 - 10:00 a 11:00</label>
		  	<select class='form-control' id='ev12cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev13cb">Evento 3 - 11:00 a 12:00</label>
		  	<select class='form-control' id='ev13cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev14cb">Evento 4 - 15:00 a 16:00</label>
		  	<select class='form-control' id='ev14cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev15cb">Evento 5 - 16:00 a 17:00</label>
		  	<select class='form-control' id='ev15cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev16cb">Evento 6 - 17:00 a 18:00</label>
		  	<select class='form-control' id='ev16cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
	</div>
	</div>
	
	<div class='col-md-3'>
		  <div class="form-group">
			<label for="dia2">Dia 2</label>
			<br>
			<label for="ev21cb">Evento 1 - 9:00 a 10:00</label>
		  	<select class='form-control' id='ev21cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev22cb">Evento 2 - 10:00 a 11:00</label>
		  	<select class='form-control' id='ev22cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev23cb">Evento 3 - 11:00 a 12:00</label>
		  	<select class='form-control' id='ev23cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev24cb">Evento 4 - 15:00 a 16:00</label>
		  	<select class='form-control' id='ev24cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev25cb">Evento 5 - 16:00 a 17:00</label>
		  	<select class='form-control' id='ev25cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev26cb">Evento 6 - 17:00 a 18:00</label>
		  	<select class='form-control' id='ev26cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		  </div>
			  
	</div>
	<div class='col-md-3'>
		<div class="form-group">
			<label for="dia3">Dia 3</label>
			<br>
			<label for="ev31cb">Evento 1 - 9:00 a 10:00</label>
		  	<select class='form-control' id='ev31cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev32cb">Evento 2 - 10:00 a 11:00</label>
		  	<select class='form-control' id='ev32cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev33cb">Evento 3 - 11:00 a 12:00</label>
		  	<select class='form-control' id='ev33cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev34cb">Evento 4 - 15:00 a 16:00</label>
		  	<select class='form-control' id='ev34cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev35cb">Evento 5 - 16:00 a 17:00</label>
		  	<select class='form-control' id='ev35cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		<label for="ev36cb">Evento 6 - 17:00 a 18:00</label>
		  	<select class='form-control' id='ev36cb'>
				<option value='0'>No Seleccionar</option>
				<option value='1'>Seleccionar</option>
			</select>
			<br>
		  </div>
		  <br>
<button type="submit" class="btn btn-primary">Guardar Seleccion</button>
		</div>
		
		
		</form>		  	
		<div class='col-md-3'>
		  		<div class='result'>
		  </div>
		</div>

	
	</div>
	</div> 
	</div>
 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		$( "#seleccionar" ).submit(function( event ) {
			var ev11cb=$("#ev11cb").val();
			var ev12cb=$("#ev12cb").val();
			var ev13cb=$("#ev13cb").val();
			var ev14cb=$("#ev14cb").val();
			var ev15cb=$("#ev15cb").val();
			var ev16cb=$("#ev16cb").val();

			var ev21cb=$("#ev21cb").val();
			var ev22cb=$("#ev22cb").val();
			var ev23cb=$("#ev23cb").val();
			var ev24cb=$("#ev24cb").val();
			var ev25cb=$("#ev25cb").val();
			var ev26cb=$("#ev26cb").val();

			var ev31cb=$("#ev31cb").val();
			var ev32cb=$("#ev32cb").val();
			var ev33cb=$("#ev33cb").val();
			var ev34cb=$("#ev34cb").val();
			var ev35cb=$("#ev35cb").val();
			var ev36cb=$("#ev36cb").val();

			parametros={"ev11cb":ev11cb, "ev12cb":ev12cb, "ev13cb":ev13cb, "ev14cb":ev14cb, "ev15cb":ev15cb, 
			           "ev16cb":ev16cb, "ev21cb":ev21cb, "ev22cb":ev22cb, "ev23cb":ev23cb, "ev24cb":ev24cb, "ev25cb":ev25cb, "ev26cb":ev26cb, "ev31cb":ev31cb, "ev32cb":ev32cb, "ev33cb":ev33cb, "ev34cb":ev34cb, 
			                 "ev35cb":ev35cb, "ev36cb":ev36cb};
			  $.ajax({
				type: "POST",
				url: "guardarev.php",
				data: parametros,
				success: function(datos){
					$(".result").html(datos);
				}
			 })
		  event.preventDefault();
		});
	</script>
</body>