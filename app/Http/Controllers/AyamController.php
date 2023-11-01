<?php

namespace App\Http\Controllers;

use App\Models\ayam;
use Illuminate\Http\Request;

class AyamController extends Controller
{
    public function index()
    {
        $data = ayam::all();
        // return response()->json($ayams);
        return view("admin.ayam.index",compact('data'));
    }
    public function create()
    {
        // $ayams = ayam::all();
        // return response()->json($ayams);
        return view("admin.ayam.create");
    }
    

    public function store(Request $request)
    {
        $ayam = ayam::create($request->all());
        return redirect("/ayams");
    }

    public function show($id)
    {
        $ayam = ayam::findOrFail($id);
        return view("admin.ayam.edit",compact('ayam'));
    }

    public function update(Request $request, $id)
    {
        $ayam = ayam::findOrFail($id);
        $ayam->update($request->all());
        return redirect("/ayams");
    }

    public function destroy($id)
    {
        ayam::destroy($id);
        return redirect("/ayams");
    }
}
