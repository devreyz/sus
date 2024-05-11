<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Adicione o link para o CSS do Tailwind -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Adicione estilos personalizados aqui, se necessário */
  </style>
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
<!-- Login Section -->
<section class="py-12">
  <div class="container mx-auto flex items-center justify-center">

    <div class="bg-white rounded-lg p-8 shadow-md w-96">
      <h2 class="text-2xl font-bold mb-4">Faça Login</h2>
      <form action="/login" method="POST">
        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
          <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-700 font-bold mb-2">Senha</label>
          <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Entrar</button>
      </form>
      <p class="mt-4 text-sm text-gray-600">
        Ainda não tem uma conta? <a href="/register" class="text-blue-500 hover:underline">Cadastre-se aqui</a>.
      </p>
    </div>
  </div>
</section>

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