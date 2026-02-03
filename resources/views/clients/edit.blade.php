@extends('layout.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Editar Cliente: {{ $client->nome }}</h2>

    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="space-y-4">
            <div>
                <label>Nome</label>
                <input type="text" name="nome" value="{{ $client->nome }}" class="w-full border p-2 rounded">
            </div>

            <div>
                <label>Documento</label>
                <input type="text" name="documento" value="{{ $client->documento }}" class="w-full border p-2 rounded">
            </div>

            <div>
                <label>Telefone</label>
                <input type="text" name="telefone" value="{{ $client->telefone }}" class="w-full border p-2 rounded">
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email" oninvalid="this.setCustomValidity('Por favor, insira um e-mail válido.')" oninput="this.setCustomValidity('')" value="{{ $client->email }}" class="w-full border p-2 rounded">
            </div>

            <div>
                <label>Endereço</label>
                <input type="text" name="endereco" value="{{ $client->endereco }}" class="w-full border p-2 rounded">
            </div>

            <div class="pt-4">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
                    Atualizar Dados
                </button>
                <a href="{{ route('clients.index') }}" class="ml-2 text-gray-500">Voltar</a>
            </div>
        </div>
        @if ($errors->any())
            <div class="mt-4 p-3 bg-red-50 border border-red-100 rounded-lg">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li class="text-sm text-red-600">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</div>
@endsection