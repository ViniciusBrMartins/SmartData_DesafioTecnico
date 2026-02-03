@extends('layout.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">
        {{ isset($client) ? 'Editar Cliente' : 'Novo Cliente' }}
    </h2>

    <form action="{{ isset($client) ? route('clients.update', $client->id) : route('clients.store') }}" method="POST">
        @csrf
        @if(isset($client))
            @method('PUT')
        @endif

        @include('clients.partials.form')

        <div class="mt-8 flex justify-end gap-4">
            <a href="{{ route('clients.index') }}" class="text-gray-600 px-4 py-2 hover:underline">Cancelar</a>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 shadow-md">
                Salvar Cliente
            </button>
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