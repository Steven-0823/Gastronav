<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .cabecera {
            background-color: beige;
            color: black;
        }
    </style>
    <title>Reporte de Restaurantes Gatronav</title>
</head>
<body>

    
      
            <h1 class="text-center mb-4">Restaurantes</h1>
            
                <table class="table" style="font-size: 15px">
                    <thead class="cabecera">
                    <tr>
                        <th>Nombre</th>
                        <th scope="col">Imagen</th>
                        <th>Descripción</th>
                        <th>Categoría</th>
                        <th>Teléfono</th>
                        <th>Horario</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($restaurantes as $restaurante)
                        <tr>
                            <td>{{ $restaurante->name }}</td>
                            <td><img src="{{$restaurante->imagen}}" alt="Imagen del restaurante" style="width: 100px;"></td>
                            <td>{{ $restaurante->descripcion }}</td>
                            <td>{{ $restaurante->categoria_id }}</td>
                            <td>{{ $restaurante->telefono }}</td>
                            <td>{{ $restaurante->horario_apertura }} - {{ $restaurante->horario_cierre }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
       


<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
