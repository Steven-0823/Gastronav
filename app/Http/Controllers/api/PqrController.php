<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
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
            return response()->json(['pqrs' => $pqrs]);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
