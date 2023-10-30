<?php

namespace App\Http\Controllers;

use App\Models\servo;
use Illuminate\Http\Request;

class ServoController extends Controller
{
    public function index()
    {
        $servos = servo::all();
        return response()->json($servos);
    }

    public function store(Request $request)
    {
        $servo = servo::create($request->all());
        return response()->json($servo, 201);
    }

    public function show($id)
    {
        $servo = servo::findOrFail($id);
        return response()->json($servo);
    }

    public function update(Request $request, $id)
    {
        $servo = servo::findOrFail($id);
        $servo->update($request->all());
        return response()->json($servo, 200);
    }

    public function destroy($id)
    {
        servo::destroy($id);
        return response()->json(null, 204);
    }
}
