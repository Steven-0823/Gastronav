<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categorias = DB::table('categories')->get();
 
       return view('categoria.index',['categorias'=>$categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = DB::table('categories')
        ->orderBy('id')
        ->get();
        return view('categoria.new',['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $categoria = new Categoria();

       $categoria ->name = $request->name;
       $categoria ->Descripcion = $request->Descripcion;
        $categoria -> save();
        return redirect()->route('categoria.index'); 
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
        $categoria = Categoria::find($id);
        $categorias = DB::table('categories')
        ->orderBy('name')
        ->get();

        return view('categoria.edit', ['categoria' => $categoria, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = Categoria::find($id);

        $categoria ->name = $request->name;
       $categoria ->Descripcion = $request->Descripcion;
        $categoria -> save();

        $categorias = DB::table('categories')
        ->orderBy('name')
        ->get();

        return view('categoria.index',['categorias'=>$categorias]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        $categorias = DB::table('categories')
        ->orderBy('name')
        ->get();

        return redirect()->route('categoria.index'); 
    }
}
