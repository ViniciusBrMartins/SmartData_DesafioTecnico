<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Meu App Laravel')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-gray-900">

    <nav class="bg-white shadow-sm py-4 mb-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <span class="font-bold text-indigo-600 text-xl tracking-tight">BRAND LOGO</span>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="mt-12 py-6 text-center text-gray-400 text-sm">
        &copy; {{ date('Y') }} Seu App. Todos os direitos reservados.
    </footer>

</body>
</html>