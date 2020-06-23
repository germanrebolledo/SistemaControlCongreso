<!doctype html>
<html>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Inicio de sesion</title>
    </head>
    
    <body bgcolor="E0DDDD">
        <center><h1>Sistema de Control Congreso</h1><br>
                <h2>Inicio de sesion</h2></center>
        <div class='container' >
            <form method='post' id="logear">
            <div class='row'>
            <div class='col-md-4'>
            <div class="form-group">
                
            </div>
            </div>
    
    <div class='col-md-4'>
        <div class="form-group">
            <label for="textmai">Correo electronico</label>
            <input type="text" class="form-control" id="textmai"  placeholder="Ingresa tu correo" required>
            <br>
            <label for="textpas">Password</label>
            <input type="Password" class="form-control" id="textpas"  placeholder="Ingresa el password" required>
            <br>
            <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
        </div>
        </div>
        </form> 
    
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
        $( "#logear" ).submit(function( event ) {
            var textmai=$("#textmai").val();
            var textpas=$("#textpas").val();
            parametros={"textmai":textmai, "textpas":textpas};
             $.ajax({
                type: "POST",
                url: "logeo.php",
                data: parametros,
                success: function(datos){
                    $(".result").html(datos);
                }
             })
          event.preventDefault();
        });
    </script>