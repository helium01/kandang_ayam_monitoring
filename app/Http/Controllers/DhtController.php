<?php

namespace App\Http\Controllers;

use App\Models\dht;
use Illuminate\Http\Request;

class DhtController extends Controller
{
    public function index()
    {
        $dhts = dht::all();
        return response()->json($dhts);
    }

    public function store(Request $request)
    {
        $dht = dht::create($request->all());
        return response()->json($dht, 201);
    }

    public function show($id)
    {
        $dht = dht::findOrFail($id);
        return response()->json($dht);
    }

    public function update(Request $request, $id)
    {
        $dht = dht::findOrFail($id);
        $dht->update($request->all());
        return response()->json($dht, 200);
    }

    public function destroy($id)
    {
        dht::destroy($id);
        return response()->json(null, 204);
    }
}
