@extends('layout.app')

@section('content')
<div class="bg-white rounded-lg shadow-sm overflow-hidden">
    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
        <h2 class="text-2xl font-semibold text-gray-700">Todos os Clientes</h2>
        <a href="{{ route('clients.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">
            + Adicionar Cliente
        </a>
    </div>

    <table class="w-full text-left border-collapse">
        <thead class="bg-gray-50 border-b">
            <tr>
                <th class="px-6 py-3 text-gray-600 font-bold uppercase text-xs tracking-wider">Nome</th>
                <th class="px-6 py-3 text-gray-600 font-bold uppercase text-xs tracking-wider">Documento</th>
                <th class="px-6 py-3 text-gray-600 font-bold uppercase text-xs tracking-wider">Email</th>
                <th class="px-6 py-3 text-gray-600 font-bold uppercase text-xs tracking-wider">Telefone</th>
                <th class="px-6 py-3 text-gray-600 font-bold uppercase text-xs tracking-wider">Endereço</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse($clients as $client)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 text-sm font-semibold text-gray-800">{{ $client->nome }}</td>
                    <td class="px-6 py-4 text-sm">{{ $client->documento }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $client->email }}</td>
                    <td class="px-6 py-4 text-sm">{{ $client->telefone }}</td>
                    <td class="px-6 py-4 text-sm">{{ $client->endereco }}</td>
                    
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('clients.edit', $client->id) }}" class="text-blue-600 hover:text-blue-900 font-medium">Editar</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        
                        <button type="submit" 
                                class="text-red-600 hover:text-red-900 font-medium"
                                onclick="return confirm('Tem certeza que deseja excluir este cliente?')">
                            Excluir
                        </button>
                    </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-6 py-10 text-center text-gray-400">Clientes não encontrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection