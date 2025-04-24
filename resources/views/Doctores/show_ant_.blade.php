<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalle del doctor</h1>
    <p><strong>ID:</strong> {{ $doctor->id}}</p>
    <p><strong>Nombre:</strong> {{ $doctor->nombre }}</p>
    <p><strong>Especialidad:</strong> {{ $doctor->especialidad }}</p>
    <img src="{{ $doctor->imagen_url ?? 'https://i.imgur.com/qJLNDfX.png' }}" alt="Imagen de {{ $doctor->nombre }}" class="w-16 h-16 rounded-full object-cover">   
</body>
</html>