<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Listado de Roles') }}</h2>
            <a href="{{ route('roles.create') }}" class="btn btn-success">Agregar Rol</a>
        </div>
    </x-slot>
    
    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <th scope="row">{{ $role->id }}</th>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->descripcion }}</td>
                    <td>
                        <a href="{{ route('roles.edit', ['roles' => $role->id]) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('roles.destroy', ['roles' => $role->id]) }}" method="POST" style="display: inline-block">
                            @method('DELETE')
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
</body>
</html>
