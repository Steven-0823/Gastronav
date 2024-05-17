<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sitio_Turistico;
use App\Models\Categoria;

use Illuminate\Support\Facades\DB;

class SitiosTuristicosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lugares = DB::table('_sitio_turistico')
        ->join('categories', '_sitio_turistico.categoria_id', '=', 'categories.id')
        ->select('_sitio_turistico.*', 'categories.name as nombre_categoria')
        ->get();
    
    return view('lugares.index', ['lugares' => $lugares]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lugares = Sitio_Turistico::all();
        $categorias = Categoria::all();
        return view('lugares.new', ['lugares' => $lugares, 'categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lugar = new Sitio_Turistico();
        $lugar->name = $request->name;
        $lugar->descripcion = $request->descripcion;
        $lugar->direccion = $request->direccion;
        $lugar->imagen = $request->imagen;
        $lugar->categoria_id = $request->categoria_id;
    
        $lugar->save();   
    
    
        return redirect()->route('lugar.index')->with('success', 'Restaurante creado correctamente');
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
        $lugar = Sitio_Turistico::find($id);
        $categorias = Categoria::all();
        return view('lugares.edit', ['lugar' => $lugar, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Encuentra el sitio turístico existente por su ID
    $lugar = Sitio_Turistico::find($id);

    // Actualiza los campos con los datos del formulario
    $lugar->name = $request->name;
    $lugar->descripcion = $request->descripcion;
    $lugar->direccion = $request->direccion;
    $lugar->imagen = $request->imagen;
    $lugar->categoria_id = $request->categoria_id;

    // Guarda los cambios
    $lugar->save();

    // Redirige a la página de índice con un mensaje de éxito
    return redirect()->route('lugar.index')->with('success', 'Sitio turístico actualizado correctamente');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lugar = Sitio_Turistico::find($id);
        $lugar->delete();
    
    // Redirigir a la ruta index después de eliminar el restaurante
    return redirect()->route('lugar.index')->with('success', 'Restaurante eliminado correctamente');
    }
}
