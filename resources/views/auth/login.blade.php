@extends('layout.authlayout')

@section('title', 'Login - Smart Data')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center px-4">
    <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
        
        <div class="mb-8 text-center">
            <h2 class="text-2xl font-bold text-gray-800">Bem-Vindo!</h2>
            <p class="text-gray-500 text-sm mt-1">Acesse sua conta para continuar</p>
        </div>

        <form action="{{ route('login') }}" method="POST" class="space-y-5">
            @csrf <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}"
                    placeholder="name@example.com"
                    oninvalid="this.setCustomValidity('Por favor, insira um e-mail válido.')"
                    oninput="this.setCustomValidity('')"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="••••••••"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition">
            </div>

            <button type="submit" 
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 rounded-lg transition duration-200 shadow-md hover:shadow-lg">
                Entrar
            </button>

            @if ($errors->any())
                <div class="mt-4 p-3 bg-red-50 border border-red-100 rounded-lg">
                    <ul class="list-none">
                        @foreach ($errors->all() as $error)
                            <li class="text-xs text-red-600 font-medium">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>

        <div class="footer-links mt-8 text-center border-t pt-6">
            <p class="text-sm text-gray-600">
                Não tem uma conta?
                <a href="/register" class="text-indigo-600 hover:text-indigo-800 font-semibold transition">Registre-se</a>
            </p>
        </div>
    </div>
</div>
@endsection