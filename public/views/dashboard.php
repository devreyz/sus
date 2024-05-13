<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administração do Usuário</title>
  
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-straight/css/uicons-regular-straight.css'>
  <!-- Adicione o link para o CSS do Tailwind -->
  <link rel="stylesheet" href="public/views/css/style.css" type="text/css" media="all" />
  <style>
    /* Adicione estilos personalizados aqui, se necessário */
    .nav-link {
    transition: background-color 0.3s;
    }

    .nav-link:hover {
    background-color: #4f46e5;
    }

    .nav-link a {
    transition: color 0.3s;
    }

    .nav-link:hover a {
    color: #ffffff;
    }
  </style>
</head>
<body class="bg-gray-100">
  <!-- Header -->
  <header class="shadow bg-gradient-to-r from-blue-800 to-blue-500 text-white py-4 flex items-center">
    <nav class="mx-auto px-4 container flex gap-6 items-center">
      <div class="">
        <img class="w-20 h-20" src="../public/assets/sus-brasil-logo.svg" alt="" />
    </div>
    <div class="container mx-auto">
      <h1 class="text-3xl font-bold">Painel do Usuário</h1>
      <p class="text-lg">
        Administração do Usuário
      </p>
    </div>
    
    
<div class="profile-icon relative" x-data="{ isOpen: false }">
  <!-- User Information -->
  <div class="flex flex-col items-center space-x-4 cursor-pointer" @click="isOpen = !isOpen">
    <div>
      <i class="fi fi-rs-user"></i>
    </div>
    <div class="overflow-hidden">
      <p class="text-lg font-semibold max-w-20 truncate">Fulano da Silva</p>
    </div>
  </div>
  
  <!-- Dropdown Menu -->
  <div x-show="isOpen" @click.away="isOpen = false" class="dropdown hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
    <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
      <a href="?app=register" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"  role="menuitem">Meu Perfil</a>
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Configurações</a>
      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sair</a>
    </div>
  </div>
</div>
  </nav>
</header>




<!-- Navbar Section -->
<section class="menu bg-blue-800 shadow-md sticky top-0 text-white py-4">
  <div class="container mx-auto flex justify-center">
    <nav>
      <ul class="flex gap-8">
        
        <li class="nav-link"><a href="?app=consults">Consultas</a></l>
        <li class="nav-link"><a href="#">Histórico</a></li>
        <li class="nav-link"><a href="#">Contato</a></li>
      </ul>
    </nav>
  </div>
</section>

<!-- Dashboard Section -->
<section class="px-4 py-12">

  <!-- User Data Component -->
<div class="user-data-container container mx-auto bg-white rounded-lg shadow-md p-6 mb-6">
  <h2 class="text-2xl font-bold mb-4">Seus Dados</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
      <label class="block text-gray-700 font-bold mb-2">Nome:</label>
      <p class="text-gray-800">
        Fulano da Silva
      </p>
    </div>
    <div>
      <label class="block text-gray-700 font-bold mb-2">Email:</label>
      <p class="text-gray-800">
        fulano@example.com
      </p>
    </div>
    <div>
      <label class="block text-gray-700 font-bold mb-2">Telefone:</label>
      <p class="text-gray-800">
        (00) 1234-5678
      </p> 
    </div>
    <div>
      <label class="block text-gray-700 font-bold mb-2">Data de Nascimento:</label>
      <p class="text-gray-800">
        01/01/1990
      </p>
    </div>
    <div>
      <label class="block text-gray-700 font-bold mb-2">Endereço:</label>
      <p class="text-gray-800">
        Rua Exemplo, 123
      </p>
    </div>
    <div>
      <label class="block text-gray-700 font-bold mb-2">Cidade:</label>
      <p class="text-gray-800">
        Exemplópolis
      </p>
    </div>
    <div>
      <label class="block text-gray-700 font-bold mb-2">Estado:</label>
      <p class="text-gray-800">
        Exemplostado
      </p>
    </div>
    <div>
      <label class="block text-gray-700 font-bold mb-2">CEP:</label>
      <p class="text-gray-800">
        12345-678
      </p>
    </div>
  </div>
  <div class="mt-4">
    <a href="fill-profile" class="block text-center w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Atualizar Dados</a>
  </div>
</div>



  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    <!-- Card 1: Consultas Agendadas -->
    <div class="bg-white rounded-lg p-6 shadow-md">
      <h2 class="text-xl font-bold mb-4">Consultas Agendadas</h2>
      <ul>
        <li>Consulta com Dr. Exemplo - 15/04/2024</li>
        <li>Consulta de Rotina - 20/04/2024</li>
        <!-- Adicione mais consultas agendadas aqui -->
      </ul>
    </div>
    <!-- Card 2: Resultados de Exames -->
    <div class="bg-white rounded-lg p-6 shadow-md">
      <h2 class="text-xl font-bold mb-4">Resultados de Exames</h2>
      <ul>
        <li>Resultado de Exame de Sangue - Disponível</li>
        <li>Resultado de Exame de Urina - Pendente</li>
        <!-- Adicione mais resultados de exames aqui -->
      </ul>
    </div>
    <!-- Card 3: Vacinas Agendadas -->
    <div class="bg-white rounded-lg p-6 shadow-md">
      <h2 class="text-xl font-bold mb-4">Vacinas Agendadas</h2>
      <ul>
        <li>Vacina contra Gripe - 22/04/2024</li>
        <li>Vacina contra COVID-19 - 25/04/2024</li>
        <!-- Adicione mais vacinas agendadas aqui -->
      </ul>
    </div>
    <!-- Card 4: Links Úteis -->
    <div class="bg-white rounded-lg p-6 shadow-md">
      <h2 class="text-xl font-bold mb-4">Links Úteis</h2>
      <ul>
        <li><a href="#">Agendar Consulta</a></li>
        <li><a href="#">Visualizar Histórico Médico</a></li>
        <li><a href="#">Pedir Medicamentos</a></li>
        <!-- Adicione mais links úteis aqui -->
      </ul>
    </div>
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

<script type="text/javascript" charset="utf-8">
  
  document.addEventListener('DOMContentLoaded', function () {
    var dropdownTriggers = document.querySelectorAll('.profile-icon');
    dropdownTriggers.forEach(function (trigger) {
      trigger.addEventListener('click', function (event) {
        event.stopPropagation();
        trigger.classList.toggle('open');
        var dropdownMenu = trigger.querySelector('.dropdown');
        if (dropdownMenu.classList.contains('hidden')) {
          dropdownMenu.classList.remove('hidden');
        } else {
          dropdownMenu.classList.add('hidden');
        }
      });
      const closeDropdown = function (event) {
        dropdownTriggers.forEach(function (trigger) {
          var dropdownMenu = trigger.querySelector('.absolute');
          if (!trigger.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
          }
        })}
      document.addEventListener("scroll", event=>closeDropdown(event))

      document.addEventListener('click', event  => closeDropdown(event)
        );
        
        
      });
    });
  
</script>



</body>
</html>