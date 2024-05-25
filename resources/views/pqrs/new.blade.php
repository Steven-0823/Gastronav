<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crear PQR</title>
  </head>
  <body>
    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Agregar PQR') }}
            </h2>
        </x-slot>
    <div class="container">
        <form method="POST" action="{{ route('pqr.store') }}">
            @csrf
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción: </label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" aria-describedby="descripcionHelp" required>
            @error('descripcion')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
          </div>
          <div class="mb-3">
            <label for="imagen_pqr" class="form-label">Imagen URL: </label>
            <input type="text" class="form-control" id="imagen_pqr" name="imagen_pqr" aria-describedby="imagenPqrHelp" required>
            @error('imagen_pqr')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
          </div>
          <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoría: </label>
            <select class="form-select" id="categoria_id" name="categoria_id" aria-label="Select categoria" required>
              <option selected disabled>Seleccione una categoría</option>
              @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
              @endforeach
            </select>
            @error('categoria_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
          </div>
        
          <button type="submit" class="btn btn-primary">Guardar</button>
          <a href="{{ route('pqr.index') }}" class="btn btn-warning">Cancelar</a>
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
