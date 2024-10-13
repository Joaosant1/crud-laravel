<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Http\Requests\CarroRequest;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index() {
        $carros = Carro::all();
        return view('carros.index', compact('carros'));
    }

    public function create() {
        return view('carros.create');
    }

    public function store(CarroRequest $request) {
        Carro::create($request->validated());
        return redirect()->route('carros.index')->with('success', 'Carro adicionado com sucesso.');
    }

    public function show($id) {
        $carro = Carro::findOrFail($id);
        return view('carros.show', compact('carro'));
    }

    public function edit($id) {
        $carro = Carro::findOrFail($id);
        return view('carros.edit', compact('carro'));
    }

    public function update(CarroRequest $request, $id) {
        $carro = Carro::findOrFail($id);
        $carro->update($request->validated());
        return redirect()->route('carros.index')->with('success', 'Carro atualizado com sucesso.');
    }

    public function destroy($id) {
        $carro = Carro::findOrFail($id);
        $carro->delete();
        return redirect()->route('carros.index')->with('success', 'Carro excluído com sucesso.');
    }
}
