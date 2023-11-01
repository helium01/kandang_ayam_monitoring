<?php

namespace App\Http\Controllers;

use App\Models\saklar;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class SaklarController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->page);
        if($request->page==null){
            $page=1;
        }else{
            $page=$request->page;
        }
        return view('admin.saklar.index',compact('page'));
    }
    public function index2()
    {
        $data = Saklar::orderBy("created_at",'desc')->simplePaginate(10); // Ganti angka 10 dengan jumlah item per halaman yang diinginkan
        $data->setPath('saklars');
        return view('admin.saklar.tabel',compact('data'));
    }

    public function store(Request $request)
    {
        $saklar = Saklar::create($request->all());
        return response()->json($saklar, 201);
    }
    public function store2(Request $request)
    {
        $saklar = Saklar::create($request->all());
        // dd($request);
        return redirect("/saklars");
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
