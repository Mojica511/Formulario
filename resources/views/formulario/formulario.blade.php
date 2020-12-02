<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>Document</title>
</head>
<body>
    @section('formulario')
        <form class = "formulario" action="{{action('PruebasController@validar')}}" method = "POST" >
            {{csrf_field()}}
            <input type="text" name = "user" placeholder = "Usuario">
            <input type="password" name = "pass" placeholder = "Contraseña">
            <input type="submit" value = "Enviar">
        </form>
    @show
</body>
</html>