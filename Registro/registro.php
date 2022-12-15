

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Registro</title>
</head>

<body>
    <div class="main">
    <div class="registro">
        <h2>Registrar</h2>
        
        <form id="registro" method="post" action="../admi/php/add-users.php">
        <label for="Nombre">DNI</label>
            <br>
            <input type="number"  name="dni" id="dni" class="name"
            placeholder="Ingresa tu dni" style="border-bottom:1px white solid !important; color: rgb(214, 214, 214) !important; margin-bottom:10px">
            <br>

            <label for="Nombre">Nombres</label>
            <br>
            <input style="margin-bottom:10px; border-bottom:1px white solid !important; color: rgb(214, 214, 214) !important" type="text"  name="nombres" id="nombres" class="name">
            <br>

            <label for="apellido">Apellidos</label>
            <br>
            <input style="margin-bottom:10px; border-bottom:1px white solid !important; color: rgb(214, 214, 214) !important" type="text"  name="apellidos" id="apellidos" class="name">
            <br>

            <label for="telefono">Telefono</label>
            <br>
            <input style="margin-bottom:10px; border-bottom:1px white solid !important; color: rgb(214, 214, 214) !important" type="text"  name="telefono" class="name">
            <br>

            <label for="correo">Correo</label>
            <br>
            <input style="margin-bottom:10px; border-bottom:1px white solid !important; color: rgb(214, 214, 214) !important" type="text" name="correo" class="name">
            <br>
    
            <label for="pass">Contraseña</label>
            <br>
            <input style="margin-bottom:10px; border-bottom:1px white solid !important; color: rgb(214, 214, 214) !important" type="password" name="contraseña" class="name" style="color:orange">
            <br>
            
            <div>
            <button  class="btn btn-warning" style="margin-bottom:20px; color:white !important;" type="submit" name="registrar" value="crear" id="submit" class="formulario__btn">Registrar</button>

        </div>
        </form>
    </div>
    </div>
    
    <script>
        var dni = document.getElementById('dni');
        var nombres = document.getElementById('nombres');
        var apellidos = document.getElementById('apellidos');

        var dnival = document.getElementById('dni').value;

        dni.addEventListener('input', function(e){
            var dnival = document.getElementById('dni').value;
           if(dnival.length == 8){
            fetch("https://dniruc.apisperu.com/api/v1/dni/" + dnival + "?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Imx1aXNwZmNhbmFsZXNAZ21haWwuY29tIn0.Vg8H-t3AU2FNwYPp8tBCVdjpuyl_7Q6CcLeL2Z3aR5k")
        .then((res) => res.json())
        .then(data => {
                console.log(data.nombres+" "+data.apellidoPaterno+" "+data.apellidoMaterno); 
                nombres.value = data.nombres;   
                apellidos.value = data.apellidoPaterno+" "+data.apellidoMaterno; 
        })
           }
           else{
            nombres.value = " ";   
                apellidos.value = " "; 
           }
        });

    </script>
</body>
</html>