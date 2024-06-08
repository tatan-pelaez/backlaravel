<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Paises;


class PaisesController extends Controller
{
    public function index()
    {
        $ejemplos = Paises::all();
        return $ejemplos;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $rol = Paises::create($data);
        return response()->json(['message' => true, 'data' => $rol]);
    }
}
