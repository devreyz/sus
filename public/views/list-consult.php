<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <!-- Adicione o link para o CSS do Tailwind -->
    <link rel="stylesheet" href="public/views/css/style.css" type="text/css" media="all" />
</head>
<body class="bg-gray-100">

  <!-- Header -->
  <header class="shadow bg-gradient-to-r from-blue-800 to-blue-500 text-white py-4 flex items-center">
    <nav class="mx-auto px-4 container flex gap-6 items-center">
      <div class="">
        <img class="w-20 h-20" src="public/assets/sus-brasil-logo.svg" alt="" />
      </div>
      <div class="container mx-auto">
        <h1 class="text-3xl font-bold">Consultas</h1>
        <p class="text-lg">
          Visualize e agende suas consultas aqui.
        </p>
      </div>
    </nav>
  </header>


<!-- Navbar Section -->
<section class="menu bg-blue-800 shadow-md sticky top-0 text-white py-4">
  <div class="container mx-auto flex justify-center">
    <nav>
      <ul class="flex gap-8">
        <li class="nav-link"><a href="?app=dashboard">Página Inicial</a></li>
        <li class="nav-link"><a href="#">Histórico</a></li>
        <li class="nav-link"><a href="#">Contato</a></li>
      </ul>
    </nav>
  </div>
</section>


<!-- Consultas Agendadas Section -->
<section class="px-4 py-12">
  <!-- Consultas Agendadas Component -->
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Consulta 1 -->
    <div class="bg-white rounded-lg shadow-md p-6">
      <p class="font-semibold">Consulta de Rotina</p>
      <p><span class="font-semibold">Médico:</span> Dr. Exemplo</p>
      <p><span class="font-semibold">Tipo de Consulta:</span> Rotina</p>
      <p><span class="font-semibold">Sintomas:</span> Nenhum</p>
      <p><span class="font-semibold">Data:</span> 20/04/2024</p>
      <p><span class="font-semibold">Local:</span> Clínica XYZ</p>
      <button class="text-indigo-600 hover:text-indigo-900 mt-4">Editar</button>
    </div>
    <!-- Consulta 2 -->
    <div class="bg-white rounded-lg shadow-md p-6">
      <p class="font-semibold">Consulta de Acompanhamento</p>
      <p><span class="font-semibold">Médico:</span> Dra. Teste</p>
      <p><span class="font-semibold">Tipo de Consulta:</span> Acompanhamento</p>
      <p><span class="font-semibold">Sintomas:</span> Febre leve</p>
      <p><span class="font-semibold">Data:</span> 25/04/2024</p>
      <p><span class="font-semibold">Local:</span> Hospital ABC</p>
      <button class="text-indigo-600 hover:text-indigo-900 mt-4">Editar</button>
    </div>
    <!-- Adicione mais consultas conforme necessário -->
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
