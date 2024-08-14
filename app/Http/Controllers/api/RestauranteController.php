<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Restaurante;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurantes = DB::table('restaurantes')
            ->join('categories', 'restaurantes.categoria_id', '=', 'categories.id')
            ->select('restaurantes.*', 'categories.name as nombre_categoria')
            ->get();
        return response()->json(['restaurantes' => $restaurantes]);
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'direccion' => 'required|string|max:255',
        'imagen' => 'required|url',
        'categoria_id' => 'required|exists:categories,id',
        'telefono' => 'nullable|string|max:20',
        'horario_apertura' => 'required',
        'horario_cierre' => 'required',
    ]);

    $restaurante = new Restaurante();
    $restaurante->name = $request->name;
    $restaurante->descripcion = $request->descripcion;
    $restaurante->direccion = $request->direccion;
    $restaurante->imagen = $request->imagen;
    $restaurante->categoria_id = $request->categoria_id;
    $restaurante->telefono = $request->telefono;
    $restaurante->horario_apertura = $request->horario_apertura . ':00';
    $restaurante->horario_cierre = $request->horario_cierre . ':00';

    $restaurante->save();   

    return response()->json(['restaurante' => $restaurante]);
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $restaurante = Restaurante::find($id);
        return json_encode(['restaurante' => $restaurante], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'direccion' => 'required|string|max:255',
        'imagen' => 'required|url',
        'categoria_id' => 'required|exists:categories,id',
        'telefono' => 'nullable|string|max:20',
        'horario_apertura' => 'required',
        'horario_cierre' => 'required',
    ]);

    $restaurante = Restaurante::find($id);
    $restaurante->name = $request->name;
    $restaurante->descripcion = $request->descripcion;
    $restaurante->direccion = $request->direccion;
    $restaurante->imagen = $request->imagen;
    $restaurante->categoria_id = $request->categoria_id;
    $restaurante->telefono = $request->telefono;
    $restaurante->horario_apertura = $request->horario_apertura;
    $restaurante->horario_cierre = $request->horario_cierre;
    
    // Guardar los cambios en la base de datos
    $restaurante->save();

    return response()->json(['restaurante' => $restaurante]);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $restaurante = Restaurante::findOrFail($id);
    $restaurante->delete();

    return response()->json(['message' => 'Restaurante eliminado con éxito']);
}
    public function pdf()
    {
        $restaurantes = Restaurante::all();
        $pdf = Pdf::loadView('restaurantes.pdf', compact('restaurantes'));
        return $pdf->stream();
        //return view('lugares.pdf');
    }
}
