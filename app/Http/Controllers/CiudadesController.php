<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudades;

class CiudadesController extends Controller
{
    public function index()
    {
        $ejemplos = Ciudades::all();
        return $ejemplos;
    }
    public function create(Request $request)
    {
        $data = $request->all();
        $rol = Ciudades::create($data);
        return response()->json(['message' => true, 'data' => $rol]);
    }

    public function show($id)
    {
        // $ejemplos = Ciudades::where('FK_PAIS',$id)->take(1)->get();
        $ejemplos = Ciudades::where('FK_PAIS',$id)->get();
        return $ejemplos;
    }
}
