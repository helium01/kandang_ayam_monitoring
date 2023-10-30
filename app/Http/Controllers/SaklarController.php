<?php

namespace App\Http\Controllers;

use App\Models\saklar;
use Illuminate\Http\Request;

class SaklarController extends Controller
{
    public function index()
    {
        $saklars = Saklar::all();
        return response()->json($saklars);
    }

    public function store(Request $request)
    {
        $saklar = Saklar::create($request->all());
        return response()->json($saklar, 201);
    }

    public function show($id)
    {
        $saklar = Saklar::findOrFail($id);
        return response()->json($saklar);
    }

    public function update(Request $request, $id)
    {
        $saklar = Saklar::findOrFail($id);
        $saklar->update($request->all());
        return response()->json($saklar, 200);
    }

    public function destroy($id)
    {
        Saklar::destroy($id);
        return response()->json(null, 204);
    }
}
