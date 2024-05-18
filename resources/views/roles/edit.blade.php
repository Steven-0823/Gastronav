<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Rol</title>
  </head>
  <body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Rol') }}
            </h2>
        </x-slot>
        <div class="container">
            <form method="POST" action="{{ route('roles.update', ['roles' => $role->id]) }}">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id" disabled="disabled" value="{{ $role->id }}">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del Rol: </label>
                    <input type="text" class="form-control" id="name" name="name" required value="{{ $role->name }}">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción: </label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required value="{{ $role->descripcion }}">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('roles.index') }}" class="btn btn-warning">Cancelar</a>
            </form>
        </div>
    </x-app-layout>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
