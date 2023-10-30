<?php

namespace App\Http\Controllers;

use App\Models\esp32;
use Illuminate\Http\Request;

class Esp32Controller extends Controller
{
    public function index()
    {
        $esp32s = esp32::all();
        return response()->json($esp32s);
    }

    public function store(Request $request)
    {
        $esp32 = esp32::create($request->all());
        return response()->json($esp32, 201);
    }

    public function show($id)
    {
        $esp32 = esp32::findOrFail($id);
        return response()->json($esp32);
    }

    public function update(Request $request, $id)
    {
        $esp32 = esp32::findOrFail($id);
        $esp32->update($request->all());
        return response()->json($esp32, 200);
    }

    public function destroy($id)
    {
        esp32::destroy($id);
        return response()->json(null, 204);
    }
}
