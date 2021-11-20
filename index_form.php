<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de contacto</h1>  
    <form action="procesa_form.php" >
    <table>
        <tr>
            <td>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
        </td>
        </tr>
        <tr>
            <td>
        <label for="correo">Correo electronico</label>
        <input type="text" id="correo" name="email" placeholder="Ingresa tu correo">
        </td>
        </tr>
        <tr>
        <td>  
        <input type="submit" value="Ingresar">
        </td>
        </tr> 
    </form>
    </table>
</body>
</html>