<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .title{
            font-size: 17px;
            color: #fdfeff;
            background: #1c1b1b;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1 class="title">Correo electrónico</h1>
    <p>Holis</p>
    <p><strong>Nombre:</strong>{{$contacto['nombre']}}</p>
    <p><strong>correo:</strong>{{$contacto['correo']}}</p>
    <p><strong>mensaje:</strong>{{$contacto['mensaje']}}</p>

</body>
</html>
