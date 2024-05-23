<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Restaurante</title>
  </head>
  <body>
    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Add Restaurante') }}
            </h2>
        </x-slot>
    <div class="container">
        <form method="POST" action="{{ route('restaurante.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre del restaurante: </label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion: </label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" aria-describedby="descripcionHelp">
            @error('descripcion')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
          </div>
          <div class="mb-3">
            <label for="direccion" class="form-label">Direccion: </label>
            <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="direccionHelp">
            @error('direccion')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
          </div>
          <div class="mb-3">
            <label for="imagen" class="form-label">Imagen URL: </label>
            <input type="text" class="form-control" id="imagen" name="imagen" aria-describedby="imagenHelp">
            @error('imagen')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
          </div>
          <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria: </label>
            <select class="form-select" id="categoria_id" name="categoria_id" aria-label="Select categoria">
              <option selected>Seleccione una categoria</option>
              @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
              @endforeach
            </select>
            @error('categoria_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">Telefono: </label>
            <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="telefonoHelp">
            @error('telefono')
            <div class="text-danger">{{ $message }}</div>
        @enderror
          </div>
          <div class="mb-3">
            <label for="horario_apertura" class="form-label">Horario de apertura: </label>
            <input type="datetime-local" class="form-control" id="horario_apertura" name="horario_apertura" aria-describedby="horarioAperturaHelp">
            @error('horario_apertura')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        
        <div class="mb-3">
            <label for="horario_cierre" class="form-label">Horario de cierre: </label>
            <input type="datetime-local" class="form-control" id="horario_cierre" name="horario_cierre" aria-describedby="horarioCierreHelp">
            @error('horario_cierre')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        
          <button type="submit" class="btn btn-primary">Save</button>
          <a href="{{ route('restaurante.index') }}" class="btn btn-warning">Cancelar</a>
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
