<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historial;

class infopc extends Controller
{
    public function getInfo(Request $request)
    {
        $ip = $request->ip();
        $hostname = gethostname();

        return response()->json([
            'ip' => $ip,
            'hostname' => $hostname
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $rol = historial::create($data);
        return response()->json(['message' => true, 'data' => $rol]);
    }

    public function show($ip, $nombrepc)
    {
        $ejemplos = historial::where('IPCONSULTA',$ip)
        ->where('NOMBREPC', $nombrepc)
        ->orderByDesc('PK_HISTORIAL')
        ->take(5)
        ->get();
        return $ejemplos;
    }
}
