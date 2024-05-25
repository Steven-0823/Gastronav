<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Pqr;
use Illuminate\Support\Facades\DB;

class PqrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pqrs = DB::table('pqrs')
            ->join('categories', 'pqrs.categoria_id', '=', 'categories.id')
            ->select('pqrs.*', 'categories.name as nombre_categoria')
            ->get();
        
        return view('pqrs.index', ['pqrs' => $pqrs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('pqrs.new', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'imagen_pqr' => 'required|url',
            'descripcion' => 'required|string',
            'categoria_id' => 'required|exists:categories,id',
        ]);

        $pqr = new Pqr();
        $pqr->imagen_pqr = $request->imagen_pqr;
        $pqr->descripcion = $request->descripcion;
        $pqr->categoria_id = $request->categoria_id;

        $pqr->save();   

        return redirect()->route('pqr.index')->with('success', 'PQR creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pqr = Pqr::find($id);
        $categorias = Categoria::all();
        return view('pqrs.edit', ['pqr' => $pqr, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'imagen_pqr' => 'required|url',
            'descripcion' => 'required|string',
            'categoria_id' => 'required|exists:categories,id',
        ]);

        $pqr = Pqr::find($id);
        $pqr->imagen_pqr = $request->imagen_pqr;
        $pqr->descripcion = $request->descripcion;
        $pqr->categoria_id = $request->categoria_id;
        
        // Guardar los cambios en la base de datos
        $pqr->save();
    
        // Redirigir a la ruta index después de actualizar el PQR
        return redirect()->route('pqr.index')->with('success', 'PQR actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pqr = Pqr::find($id);
        $pqr->delete();
        
        // Redirigir a la ruta index después de eliminar el PQR
        return redirect()->route('pqr.index')->with('success', 'PQR eliminado correctamente');
    }
}