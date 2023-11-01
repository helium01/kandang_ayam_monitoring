<?php

namespace App\Http\Controllers;

use App\Models\rtc;
use Illuminate\Http\Request;

class RtcController extends Controller
{
    public function index()
    {
        $rtcs = rtc::orderBy("created_at","desc")->get();
        return response()->json($rtcs, 201);
        // return view('admin.rtc.table',compact('rtcs'));
    }
    public function index2()
    {
        $data = rtc::orderBy("created_at",'desc')->simplePaginate(10);
        return view('admin.rtc.index',compact('data'));
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
