@extends('layout.authlayout')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center px-4">
    <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
        
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Crie sua Conta</h2>

        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                <input type="text" id="name" name="name" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" placeholder="name@example.com"
                    oninvalid="this.setCustomValidity('Por favor, insira um e-mail válido.')"
                    oninput="this.setCustomValidity('')"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
                <input type="password" id="password" name="password" placeholder="••••••••"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition">
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confime a Senha</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition">
            </div>

            <button type="submit" 
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg transition duration-200 ease-in-out shadow-md hover:shadow-lg">
                Criar Conta
            </button>

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

        <div class="mt-6 text-center border-t pt-4">
            <p class="text-sm text-gray-600">
                Tem uma conta? <a href="/login" class="text-indigo-600 hover:text-indigo-800 font-medium">Entre!</a>
            </p>
        </div>

    </div>
</div>
@endsection