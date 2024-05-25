<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Restaurantes Gatronav</title>
  </head>
  <body>
    
    <x-app-layout>
      
      <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Listado de restaurantes') }}
            </h2>
            @if(auth()->user()->isAdmin())   
            <div class="d-flex align-items-center">                      
            <a href="{{route('restaurante.create')}}" class="btn btn-success me-2">Añadir Restaurante</a>
            <a href="{{route('restaurante.pdf')}}" class="btn btn-primary">Ver reporte</a>
            </div>
            @endif
        </div>
    </x-slot>
    
    
      
      <div class="container mt-4">
      
        <div class="row">
            @foreach ($restaurantes as $restaurante)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{$restaurante->imagen}}" class="card-img-top" alt="Imagen del restaurante" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h2 class="card-title"><strong>{{$restaurante->name}}</strong></h2>
                        <p class="card-text"><strong>Descripción:</strong> {{$restaurante->descripcion}}</p>
                        <p class="card-text"><strong>Categoría:</strong> {{$restaurante->nombre_categoria}}</p>
                        <p class="card-text"><strong>Teléfono:</strong> {{$restaurante->telefono}}</p>
                        <p class="card-text"><strong>Horario:</strong> {{$restaurante->horario_apertura}} - {{$restaurante->horario_cierre}}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <div>
                          @if(auth()->user()->isAdmin())        
                            <a href="{{route('restaurante.edit', ['restaurante'=>$restaurante->id]) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('restaurante.destroy', ['restaurante' => $restaurante->id]) }}" method="POST" style="display: inline-block">
                                @method('delete')
                                @csrf
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                            @endif
                        </div>
                        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($restaurante->direccion) }}" target="_blank" class="btn btn-warning">¿Cómo llegar?</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
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
</html>
