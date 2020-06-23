<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>Registro al congreso</title>
 </head>
 
 <body>
    <center><h1>Sistema de Control Congreso</h1><br>
    		<h2>Registro de datos</h2></center>
	<div class='container' >
	<form method='post' id="generador">
	<div class='row'>
	<div class='col-md-2'>
	<div class="form-group">
			<label for="textnom">Nombre</label>
			<input type="text" class="form-control" id="textnom"  placeholder="Nombre" required>
			<br>
			<label for="textapp">Apellido paterno</label>
			<input type="text" class="form-control" id="textapp"  placeholder="Apellido paterno" required>
			<br>
			<label for="textapm">Apellido materno</label>
			<input type="text" class="form-control" id="textapm"  placeholder="Apellido materno" required>
			<br>
			<label for="textmai">Correo electronico</label>
			<input type="text" class="form-control" id="textmai"  placeholder="Ingresa tu correo" required>
			<br>
			<label for="textpas">Password</label>
			<input type="Password" class="form-control" id="textpas"  placeholder="Ingresa el password" required>
	</div>
	<br>
	
	</div>
	
	<div class='col-md-2'>
		  <div class="form-group">
		  	  <label for="formop">Formacion</label>
		  <select class='form-control' id='formop'>
				<option value='Pregrado'>Pregrado</option>
				<option value='Grado'>Grado</option>
				<option value='Postgrado'>Postgrado</option>
			</select>
			<br>
			<label for="asisop">Tipo de asistente</label>
			<select class='form-control' id='asisop'>
				<option value='Academico'>Academico</option>
				<option value='Asistente'>Asistente</option>
				<option value='Estudiante'>Estudiante</option>
				<option value='Ponente'>Ponente</option>
			</select>
			<br>
			<br>
				<button type="submit" class="btn btn-primary">Guardar datos</button>
		  </div>
		</form>		  
	</div>
	<div class='col-md-2'>
	</form>
		<div class='result'>
		</div>
	</div>
	</div> 

	</div>
 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		$( "#generador" ).submit(function( event ) {
			var textnom=$("#textnom").val();
			var textapp=$("#textapp").val();
			var textapm=$("#textapm").val();
			var textmai=$("#textmai").val();
			var textpas=$("#textpas").val();
			var formop=$("#formop").val();
			var asisop=$("#asisop").val();
		
			parametros={"textnom":textnom, "textapp":textapp, "textapm":textapm, "textmai":textmai, "textpas":textpas, 
			"formop":formop, "asisop":asisop};
			 $.ajax({
				type: "POST",
				url: "guardarbase.php",
				data: parametros,
				success: function(datos){
					$(".result").html(datos);
				}
			 })
		  event.preventDefault();
		});
	</script>
</body>