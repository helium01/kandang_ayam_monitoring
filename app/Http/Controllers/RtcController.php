<?php

namespace App\Http\Controllers;

use App\Models\rtc;
use Illuminate\Http\Request;

class RtcController extends Controller
{
    public function index()
    {
        $rtcs = rtc::all();
        return response()->json($rtcs);
    }

    public function store(Request $request)
    {
        $rtc = rtc::create($request->all());
        return response()->json($rtc, 201);
    }

    public function show($id)
    {
        $rtc = rtc::findOrFail($id);
        return response()->json($rtc);
    }

    public function update(Request $request, $id)
    {
        $rtc = rtc::findOrFail($id);
        $rtc->update($request->all());
        return response()->json($rtc, 200);
    }

    public function destroy($id)
    {
        rtc::destroy($id);
        return response()->json(null, 204);
    }
}
