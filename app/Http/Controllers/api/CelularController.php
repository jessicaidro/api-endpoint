<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Celular;

class CelularController extends Controller
{
 
    public function index()
    {
        return Celular::all();
    }

    public function store(Request $request)
    {
        Celular::create($request-> all)
    }

    public function show(string $id)
    {
        return Celular::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $celular = Celular::findOrFail($id);
        $celular->update($request->all());   
    }
    public function destroy(string $id)
    {
        $celular = Celular::findOrFail($id);
        $celular->delete();
    }
}
