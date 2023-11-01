<?php

namespace App\Http\Controllers;

use App\Models\ldr;
use Illuminate\Http\Request;

class LdrController extends Controller
{
    public function index()
    {
        $ldrs = ldr::all();
        return response()->json($ldrs);
    }
    public function index2()
    {
        $data = ldr::orderBy("created_at",'desc')->simplePaginate(10);
        return view('admin.ldr.index',compact('data'));
    }

    public function store(Request $request)
    {
        $ldr = ldr::create($request->all());
        return response()->json($ldr, 201);
    }

    public function show($id)
    {
        $ldr = ldr::findOrFail($id);
        return response()->json($ldr);
    }

    public function update(Request $request, $id)
    {
        $ldr = ldr::findOrFail($id);
        $ldr->update($request->all());
        return response()->json($ldr, 200);
    }

    public function destroy($id)
    {
        ldr::destroy($id);
        return response()->json(null, 204);
    }
}
