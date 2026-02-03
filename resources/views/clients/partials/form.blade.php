<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
        <label class="block text-sm font-medium text-gray-700">Nome</label>
        <input type="text" name="nome" value="{{ old('nome', $client->nome ?? '') }}" 
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 border">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Documento</label>
        <input type="text" name="documento" value="{{ old('documento', $client->documento ?? '') }}" 
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 border">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Telefone</label>
        <input type="text" name="telefone" value="{{ old('telefone', $client->telefone ?? '') }}" 
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 border">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" oninvalid="this.setCustomValidity('Por favor, insira um e-mail válido.')" oninput="this.setCustomValidity('')" value="{{ old('email', $client->email ?? '') }}" 
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 border">
    </div>

    <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-700">Endereço</label>
        <input type="text" name="endereco" value="{{ old('endereco', $client->endereco ?? '') }}" 
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 border">
    </div>
</div>