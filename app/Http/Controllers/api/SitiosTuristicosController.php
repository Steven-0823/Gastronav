<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitio_Turistico;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade\Pdf;

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

        return response()->json(['lugares' => $lugares]);
    
    }
    public function pdf()
    {
        $lugares = Sitio_Turistico::all();
        $pdf = Pdf::loadView('lugares.pdf', compact('lugares'));
        return $pdf->stream();
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
   
    Log::info('Request recibido en store', $request->all());
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'direccion' => 'required|string',
        'imagen' => 'required|string',
        'categoria_id' => 'required|exists:categories,id',
    ]);

    $lugar = new Sitio_Turistico();
    $lugar->name = $validatedData['name'];
    $lugar->descripcion = $validatedData['descripcion'];
    $lugar->direccion = $validatedData['direccion'];
    $lugar->imagen = $validatedData['imagen'];
    $lugar->categoria_id = $validatedData['categoria_id'];

    $lugar->save();
 
    return response()->json(['lugar' => $lugar]); 
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $lugar = Sitio_Turistico::find($id);
    return response()->json(['lugar' => $lugar]);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'direccion' => 'required|string',
        'imagen' => 'required|string',
        'categoria_id' => 'required|exists:categories,id',
    ]);

    // Encuentra el sitio turístico existente por su ID
    $lugar = Sitio_Turistico::find($id);

    // Actualiza los campos con los datos validados del formulario
    $lugar->name = $validatedData['name'];
    $lugar->descripcion = $validatedData['descripcion'];
    $lugar->direccion = $validatedData['direccion'];
    $lugar->imagen = $validatedData['imagen'];
    $lugar->categoria_id = $validatedData['categoria_id'];

    // Guarda los cambios
    $lugar->save();
        return response()->json(['lugar' => $lugar]);
    
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lugar = Sitio_Turistico::find($id);
        $lugar->delete();
        return response()->json(['lugar' => $lugar]);
    }
}
