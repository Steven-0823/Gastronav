<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Roles::all();
        return view('roles.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = new Roles();
        $role->name = $request->name;
        $role->descripcion = $request->descripcion;
        $role->save();

        return redirect()->route('roles.index')->with('success', 'Role creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Roles::find($id);
        return view('roles.edit', ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = Roles::find($id);
        $role->name = $request->name;
        $role->descripcion = $request->descripcion;
        $role->save();

        return redirect()->route('roles.index')->with('success', 'Rol actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Roles::find($id);
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role eliminado correctamente');
    }
}
