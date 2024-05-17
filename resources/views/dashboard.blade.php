<x-app-layout>
    <main id="main" class="menu contenedor">
    <h2 class="texto-queteinteresa">¿Qué te interesa hoy?</h2>
    <div class="botones-lugares">
        <button class="lugares btn btn__lugares btn-amarillo"> Lugares </button>
        <button class="restaurantes btn btn__lugares btn-amarillo"> Restaurantes </button>
    </div>

    <div class="contenido__main">

        <div class="contenedor__lugares">
    <div class="container mt-4">
      <div class="row">
        @foreach ($lugares as $lugar)
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="{{ $lugar->imagen }}" class="card-img-top" alt="{{ $lugar->name }}" style="height: 400px; object-fit: cover;">
              <div class="card-body">
                <h2 class="card-title"><strong>{{ $lugar->name }}</strong></h2>
                <p class="card-text">{{ $lugar->descripcion }}</p>
                <p class="card-text"><small class="text-muted">Categoría: <strong>{{ $lugar->nombre_categoria }}</strong></small></p>
                <a href="{{ route('lugar.edit', ['lugar' => $lugar->id]) }}" class="btn btn-info">Editar</a>
                <form action="{{ route('lugar.destroy', ['lugar' => $lugar->id]) }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
   </div>
   <div class="contenedor__restaurantes">
    <div class="container mt-4">
        <div class="row">
          @foreach ($restaurantes as $restaurante)
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="{{$restaurante->imagen}}" class="card-img-top" alt="Imagen del restaurante" style="height: 200px; object-fit: cover;">
              <div class="card-body">
                <h5 class="card-title">{{$restaurante->name}}</h5>
                <p class="card-text"><strong>Descripción:</strong> {{$restaurante->descripcion}}</p>
                <p class="card-text"><strong>Dirección:</strong> {{$restaurante->direccion}}</p>
                <p class="card-text"><strong>Categoría:</strong> {{$restaurante->categoria_id}}</p>
                <p class="card-text"><strong>Teléfono:</strong> {{$restaurante->telefono}}</p>
                <p class="card-text"><strong>Horario:</strong> {{$restaurante->horario_apertura}} - {{$restaurante->horario_cierre}}</p>
              </div>
              <div class="card-footer d-flex justify-content-between">
                <a href="{{route('restaurante.edit', ['restaurante'=>$restaurante->id]) }}" class="btn btn-info">Edit</a>
                <form action="{{ route('restaurante.destroy', ['restaurante' => $restaurante->id]) }}" method="POST" style="display: inline-block">
                  @method('delete')
                  @csrf
                  <input class="btn btn-danger" type="submit" value="Delete">
                </form>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    </div>
    </main>  
    
  </x-app-layout>