<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Médico</title>
  <!-- Link para o CSS do Tailwind -->
  <link rel="stylesheet" href="public/views/css/style.css" type="text/css" media="all" />

</head>

<body class="bg-gray-100">

  <!-- Container principal -->
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
      <h2 class="text-2xl font-bold mb-6 text-center">Login Médico</h2>
      <form action="/login" method="POST">
        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
          <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-6">
          <label for="password" class="block text-gray-700 font-bold mb-2">Senha</label>
          <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex items-center justify-between">
          <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Entrar</button>
        </div>
      </form>
      <div class="mt-6 text-center">
        <a href="#" class="text-blue-500 hover:underline">Esqueceu a senha?</a>
      </div>
    </div>
  </div>

</body>

</html>