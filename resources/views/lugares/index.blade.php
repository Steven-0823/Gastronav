{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sitios turisticos Gatronav</title>
  </head>
  <body>
    <x-app-layout>
      <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Sitios turisticos') }}
          </h2>
          <a href="{{route('lugar.create')}}" class="btn btn-success">Add Sitio</a>
        </div>
      </x-slot>
      
    <div class="container">
      
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripción</th>
          <th scope="col">Direccion</th>
          <th scope="col">Imagen</th>
          <th scope="col">Categoria</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($lugares as $lugar)
        <tr>
          <th scope="row">{{$lugar->id}}</th>
          <td>{{$lugar->name}}</td>
          <td>{{$lugar->descripcion}}</td>
          <td>{{$lugar->direccion}}</td>
          <td><img src="{{$lugar->imagen}}" alt="Imagen del Sitio turistico" style="width: 100px;"></td>
          <td>{{$lugar->categoria_id}}</td>
          <td>
            <a href="{{route('lugar.edit', ['lugar'=>$lugar->id]) }}" class="btn btn-info">Edit</a>

            <form action="{{ route('lugar.destroy', ['lugar' => $lugar->id]) }}" method="POST" style="display: inline-block">
              @method('delete')
              @csrf
              <input class="btn btn-danger" type="submit" value="Delete">
          </form>
          
          </td>
        </tr> 
        @endforeach
      </tbody>
    </table>
  </div>
</x-app-layout>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html> --}}
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listado de Sitios Turísticos</title>
  </head>
  <body>
    <x-app-layout>
      <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Sitios Turísticos') }}
          </h2>
          <a href="{{ route('lugar.create') }}" class="btn btn-success">Agregar Sitio</a>
        </div>
      </x-slot>

      <div class="container mt-4">
        <div class="row">
          @foreach ($lugares as $lugar)
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img src="{{ $lugar->imagen }}" class="card-img-top" alt="{{ $lugar->name }}" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                  <h5 class="card-title"><strong>{{ $lugar->name }}</strong></h5>
                  <p class="card-text"><strong>Descripción:</strong> {{ $lugar->descripcion }}</p>
                  <p class="card-text"><strong>Categoría:</strong> {{ $lugar->nombre_categoria }}</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                  <div>
                    <a href="{{ route('lugar.edit', ['lugar' => $lugar->id]) }}" class="btn btn-info">Editar</a>
                    <form action="{{ route('lugar.destroy', ['lugar' => $lugar->id]) }}" method="POST" style="display: inline-block">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                  </div>
                  <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($lugar->direccion) }}" target="_blank" class="btn btn-warning">¿Cómo llegar?</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </x-app-layout>
    
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
