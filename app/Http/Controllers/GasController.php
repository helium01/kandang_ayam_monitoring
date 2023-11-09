<?php

namespace App\Http\Controllers;

use App\Models\gas;
use Illuminate\Http\Request;

class GasController extends Controller
{
    public function index()
    {
        $gass = gas::all();
        return response()->json($gass);
    }
    public function index2()
    {
        $data = gas::orderBy("created_at",'desc')->simplePaginate(10);
        return view('admin.gas.index',compact('data'));
    }

    public function store(Request $request)
    {
        $gas = gas::create($request->all());
        return response()->json($gas, 201);
    }

    public function show($id)
    {
        $gas = gas::findOrFail($id);
        return response()->json($gas);
    }

    public function update(Request $request, $id)
    {
        $gas = gas::findOrFail($id);
        $gas->update($request->all());
        return response()->json($gas, 200);
    }

    public function destroy($id)
    {
        gas::destroy($id);
        return response()->json(null, 204);
    }
}
