<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
  <title>Preencher Dados do Perfil</title>
  <!-- Adicione o link para o CSS do Tailwind -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex flex-col justify-between">
  <!-- Header -->
  <header class="shadow bg-gradient-to-r from-blue-800 to-blue-500 text-white py-4 flex items-center">
    <nav class="mx-auto px-4 container flex gap-6 items-center">

      <div class="">
        <img class="w-20 h-20" src="../public/assets/sus-brasil-logo.svg" alt="" />
    </div>
    <div class="container mx-auto">
      <h1 class="text-3xl font-bold">Seja Bem-vindo!</h1>
      <p class="text-lg">
        Sua plataforma de saúde online.
      </p>
    </div>
  </nav>
</header>

<!-- Form Section -->
<section class="py-12">
  <div class="container mx-auto flex items-center justify-center">
    <div class="bg-white rounded-lg p-8 shadow-md w-96">
      <h2 class="text-2xl font-bold mb-4">Complete Seu Perfil</h2>
      <form action="/update-profile" method="post">
        <div class="mb-4">
          <label for="nome" class="block text-gray-700 font-bold mb-2">Nome</label>
          <input type="text" id="nome" name="nome" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Seu nome completo" required>
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
          <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Seu email" required>
        </div>
        <div class="mb-4">
          <label for="telefone" class="block text-gray-700 font-bold mb-2">Telefone</label>
          <input type="text" id="telefone" name="telefone" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Seu telefone">
        </div>
        <div class="mb-4">
          <label for="data_nascimento" class="block text-gray-700 font-bold mb-2">Data de Nascimento</label>
          <input type="date" id="data_nascimento" name="data_nascimento" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
          <label for="endereco" class="block text-gray-700 font-bold mb-2">Endereço</label>
          <input type="text" id="endereco" name="endereco" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Seu endereço completo">
        </div>
        <div class="mb-4">
          <label for="cidade" class="block text-gray-700 font-bold mb-2">Cidade</label>
          <input type="text" id="cidade" name="cidade" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Sua cidade">
        </div>
        <div class="mb-4">
          <label for="estado" class="block text-gray-700 font-bold mb-2">Estado</label>
          <input type="text" id="estado" name="estado" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Seu estado">
        </div>
        <div class="mb-4">
          <label for="cep" class="block text-gray-700 font-bold mb-2">CEP</label>
          <input type="text" id="cep" name="cep" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Seu CEP">
        </div>
        <div class="mb-4">
          <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- Botão Flutuante -->
  <a href="#" onclick="history.go(-1)" class="float-btn w-12 h-12 text-2xl flex justify-center items-center fixed bottom-6 right-6 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-full shadow-md"><i class="fi fi-br-arrow-circle-left leading-3"></i></a>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-8">
  <div class="container mx-auto">
    <p class="text-center">
      © 2024 Todos os direitos reservados.
    </p>
  </div>
</footer>

</body>
</html>
