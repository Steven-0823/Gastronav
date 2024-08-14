<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $categorias = Categoria::all();
    return response()->json(['categorias' => $categorias]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorias  = new Categoria();
        $categorias->name = $request->name;
        $categorias->Descripcion = $request->Descripcion;
        $categorias->save();
        return json_encode(['categorias'=>$categorias], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorias=Categoria::find($id);
        return json_encode(['categorias'=>$categorias]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categorias=Categoria::find($id);
        $categorias->name = $request->name;
        $categorias->Descripcion = $request->Descripcion;
        $categorias->save();

        return json_encode(['categorias'=>$categorias]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $categorias=Categoria::find($id);
       $categorias->delete();
       
    }
}
