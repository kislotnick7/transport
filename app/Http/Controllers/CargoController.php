<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        $cargos = Cargo::all();
        return view('cargos.index', compact('cargos'));
    }

    public function create()
    {
        return view('cargos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        Cargo::create($request->all());
        return redirect()->route('cargos.index');
    }

    public function show(Cargo $cargo)
    {
        return view('cargos.show', compact('cargo'));
    }

    public function edit(Cargo $cargo)
    {
        return view('cargos.edit', compact('cargo'));
    }

    public function update(Request $request, Cargo $cargo)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $cargo->update($request->all());
        return redirect()->route('cargos.index');
    }

    public function destroy(Cargo $cargo)
    {
        $cargo->delete();
        return redirect()->route('cargos.index');
    }
}
