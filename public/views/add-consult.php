<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar Pedido de Consulta Médica</title>
  <!-- Adicione o link para o CSS do Tailwind -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <!-- Header -->
  <header class="shadow bg-gradient-to-r from-blue-800 to-blue-500 text-white py-4 flex items-center">
    <nav class="mx-auto px-4 container flex gap-6 items-center">
      <div class="">
        <img class="w-20 h-20" src="../public/assets/sus-brasil-logo.svg" alt="" />
      </div>
      <div class="container mx-auto">
        <h1 class="text-3xl font-bold">Criar Pedido de Consulta Médica</h1>
        <p class="text-lg">
          Faça seu pedido de consulta médica online.
        </p>
      </div>
    </nav>
  </header>

  <!-- Form Section -->
  <section class="py-12">
    <div class="container mx-auto max-w-md">
      <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Nome Completo
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Digite seu nome">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Digite seu email">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
            Telefone
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Digite seu telefone">
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
            Mensagem
          </label>
          <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Digite sua mensagem"></textarea>
        </div>
        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            Enviar Pedido
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white pb-4 pt-8">
    <div class="container mx-auto px-4 flex flex-wrap justify-between">
      <!-- Links úteis -->
      <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
        <h3 class="text-xl font-bold mb-4">Links úteis</h3>
        <ul>
          <li><a href="#">Perguntas frequentes</a></li>
          <li><a href="#">Termos de serviço</a></li>
          <li><a href="#">Política de privacidade</a></li>
        </ul>
      </div>
      <!-- Informações de contato -->
      <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
        <h3 class="text-xl font-bold mb-4">Contato</h3>
        <p>
          Endereço: Rua Exemplo, 123
        </p>
        <p>
          Telefone: (00) 1234-5678
        </p>
        <p>
          Email: contato@example.com
        </p>
      </div>
      <!-- Navegação -->
      <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
        <h3 class="text-xl font-bold mb-4">Navegação</h3>
        <ul>
          <li><a href="#">Página Inicial</a></li>
          <li><a href="#">Sobre nós</a></li>
          <li><a href="#">Serviços</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </div>
      <!-- Redes sociais -->
      <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
        <h3 class="text-xl font-bold mb-4">Siga-nos</h3>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
      </div>
    </div>
    <!-- Direitos Autorais -->
    <div class="mt-4">
      <p class="text-center ">
        &copy; 2024 Todos os direitos reservados.
      </p>
    </div>
  </footer>
</body>
</html>
