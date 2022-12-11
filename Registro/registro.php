

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>

<body>
    <div class="main">
    <div class="registro">
        <h2>Registrar</h2>
        
        <form id="registro" method="post">
            <label for="Nombre">Nombre</label>
            <br>
            <input type="text"  name="Nombre" id="name"
            placeholder="Ingresa tu nombre">
            <br><br>
            <label for="direccion">Dirección </label>
            <br>
            <input type="text" name="direccion" id="name" 
            placeholder="Ingresa tu dirección">
            <br><br>
            <label for="correo">Correo</label>
            <br>
            <input type="email" name="correo" id="name"
            placeholder="Ingresa un correo valido">
            <br><br>
            <label for="pass">Contraseña</label>
            <br>
            <input type="password" name="pass" id="name"
            placeholder="Ingresa una contraseña">
            <br><br>
            
            <label for="celular">Celular </label>
            <br>
            <input type="text" name="celular" id="name"
            placeholder="Ingrese un numero de celular">
            <br><br>
            <div>
            <button type="submit" name="accion" value="crear" id="submit" class="formulario__btn">Registrar</button>

        </div>
        </form>
    </div>
    </div>
    
</body>
</html>