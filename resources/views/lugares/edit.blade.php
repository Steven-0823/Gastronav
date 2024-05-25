<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Restaurante</title>
  </head>
  <body>
    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Sitios turísticos') }}
            </h2>
        </x-slot>

    <div class="container">
      <form method="POST" action="{{ route('lugar.update', ['lugar' => $lugar->id]) }}">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Id</label>
          <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" 
          disabled="disabled" value="{{ $lugar->id }}">
          <div id="idHelp" class="form-text">Id del restaurante</div>
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Nombre:</label>
          <input type="text" required class="form-control" id="name" placeholder="Nombre del Restaurante"
          name="name" value="{{ $lugar->name }}">
          @error('name')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción: </label>
            <input type="text" required class="form-control" id="descripcion" placeholder="Descripción del Restaurante"
                   name="descripcion" value="{{ $lugar->descripcion }}">
            @error('descripcion')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección: </label>
            <input type="text" required class="form-control" id="direccion" placeholder="Dirección del Restaurante"
                   name="direccion" value="{{ $lugar->direccion }}">
            @error('direccion')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">URL de la Imagen: </label>
            <input type="text" required class="form-control" id="imagen" placeholder="URL de la Imagen del Restaurante"
                   name="imagen" value="{{ $lugar->imagen }}">
            @error('imagen')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoría: </label>
            <select class="form-select" id="categoria_id" name="categoria_id">
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $lugar->categoria_id == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->name }}
                    </option>
                @endforeach
            </select>
            @error('categoria_id')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-primary">Actualizar</button>
          <a href="{{ route('lugar.index') }}" class="btn btn-warning">Cancelar</a>
        </div>
      </form>
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
