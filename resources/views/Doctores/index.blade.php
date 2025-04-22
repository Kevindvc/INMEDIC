<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Doctores</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

    <h1 class="text-3xl font-semibold mb-4 text-center">Listado de Doctores</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($doctores as $doctor)
            <div class="bg-white rounded-lg shadow-lg p-4 flex items-center space-x-4">
                <!-- URL DEL IMAGEN,-->
                <img src="{{ $doctor->imagen_url ?? 'https://i.imgur.com/qJLNDfX.png' }}" alt="Imagen de {{ $doctor->nombre }}" class="w-16 h-16 rounded-full object-cover">
                
                <div class="flex-1">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $doctor->nombre }}</h2>
                    <p class="text-gray-500">{{ $doctor->especialidad}}</p>
                </div>
            </div>
        @endforeach
    </div>

</body>
</html>