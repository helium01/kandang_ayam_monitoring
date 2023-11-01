<?php

namespace App\Http\Controllers;

use App\Models\servo;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ServoController extends Controller
{
    public function index(Request $request)
    {
        if($request->page==null){
            $page=1;
        }else{
            $page=$request->page;
        }
        return view('admin.servo.index',compact('page'));
    }
    public function index2()
    {
        $data = servo::orderBy("created_at",'desc')->simplePaginate(10); // Ganti angka 10 dengan jumlah item per halaman yang diinginkan
        $data->setPath('servos');
        return view('admin.servo.tabel',compact('data'));
    }

    public function store2(Request $request)
    {
        $servo = servo::create($request->all());
        return redirect()->back();
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
