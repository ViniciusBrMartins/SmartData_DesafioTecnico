<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view("clients.index", compact("clients"));
    }

    public function create()
    {
        return view("clients.create");
    }

    public function store(Request $request)
    {
    $validated = $request->validate([
        'nome'      => 'required|string|max:255',
        'documento' => 'required|string',
        'telefone'  => 'nullable|string',
        'email'     => 'required|string|email',
        'endereco'  => 'nullable|string',
    ]);

    Client::create($validated);

    return redirect()->route('clients.index')->with('success', 'Cliente criado com sucesso!');
    }

    public function show()
    {

    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nome' => 'required',
            'documento' => 'required',
            'email' => 'required'
        ]);

        $client = Client::findOrFail($id);
        $client ->update($validated);

        return redirect()->route('clients.index')->with('Sucesso','Cliente atualizado!');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        
        $client->delete();

        return redirect()->route('clients.index')->with('Sucesso', 'Cliente Excluido!');
    }
    // public function showClient (Request $request)
    // {
    // return view("clients.index");
    // }
    // public function client (Request $request)
    // {

    // }
}
