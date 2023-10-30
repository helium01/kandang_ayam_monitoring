<?php

namespace App\Http\Controllers;

use App\Models\ayam;
use Illuminate\Http\Request;

class AyamController extends Controller
{
    public function index()
    {
        $ayams = ayam::all();
        return response()->json($ayams);
    }

    public function store(Request $request)
    {
        $ayam = ayam::create($request->all());
        return response()->json($ayam, 201);
    }

    public function show($id)
    {
        $ayam = ayam::findOrFail($id);
        return response()->json($ayam);
    }

    public function update(Request $request, $id)
    {
        $ayam = ayam::findOrFail($id);
        $ayam->update($request->all());
        return response()->json($ayam, 200);
    }

    public function destroy($id)
    {
        ayam::destroy($id);
        return response()->json(null, 204);
    }
}
