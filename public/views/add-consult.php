<?php
session_start();
// Verifica se a sessão do usuário está definida e se contém o ID do usuário
if (!isset($_SESSION['user_id'])) {
  // Se o usuário não estiver logado, redirecione para a página de login
  header("Location: login.php");
  exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agendar Consulta</title>
  <!-- Adicione o link para o CSS do Tailwind -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

  <!-- Header -->
  <header class="shadow bg-gradient-to-r from-blue-700 to-blue-500 text-white py-4 flex items-center">
    <nav class="mx-auto px-4 container flex gap-6 items-center">
      <div class="">
        <img class="w-20 h-20" src="public/assets/sus-brasil-logo.svg" alt="" />
      </div>
      <div class="container mx-auto">
        <h1 class="text-3xl font-bold">Agendar Consulta</h1>
        <p class="text-lg">Marque sua consulta rapidamente</p>
      </div>


      <div class="profile-icon relative">
        <!-- User Information -->
        <div class="flex flex-col items-center  cursor-pointer">
          <div class="w-12 h-12 relative rounded-full overflow-hidden">
            <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" src="public/assets/profile.jpeg" alt="" />

          </div>
          <div class="overflow-hidden">
            <p class="text-lg font-semibold max-w-20 truncate"><?= $_SESSION["username"] ?></p>
          </div>
        </div>

        <!-- Dropdown Menu -->
        <div class="dropdown hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
          <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            <a href="?app=user-profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Meu Perfil</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Configurações</a>
            <a href="?app=logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sair</a>
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

  <!-- Main Section -->
  <main class="container mx-auto py-8">
    <div class="bg-white p-8 rounded shadow-md">
      <h2 class="text-2xl font-bold mb-6">Formulário de Agendamento</h2>
      <form>
        <div class="mb-4">
          <label for="nome" class="block text-gray-700">Nome Completo</label>
          <input type="text" id="nome" name="nome" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Digite seu nome completo" required>
        </div>

        <div class="mb-4">
          <label for="email" class="block text-gray-700">Email</label>
          <input type="email" id="email" name="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Digite seu email" required>
        </div>

        <div class="mb-4">
          <label for="telefone" class="block text-gray-700">Telefone</label>
          <input type="tel" id="telefone" name="telefone" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" placeholder="Digite seu telefone" required>
        </div>

        <div class="mb-4">
          <label for="especialidade" class="block text-gray-700">Especialidade</label>
          <select id="especialidade" name="especialidade" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
            <option value="">Selecione uma especialidade</option>
            <option value="cardiologia">Cardiologia</option>
            <option value="dermatologia">Dermatologia</option>
            <option value="pediatria">Pediatria</option>
            <!-- Adicione mais especialidades conforme necessário -->
          </select>
        </div>

        <div class="mb-4">
          <label for="data" class="block text-gray-700">Data da Consulta</label>
          <input type="date" id="data" name="data" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
          <label for="hora" class="block text-gray-700">Hora da Consulta</label>
          <input type="time" id="hora" name="hora" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
          <label for="sintomas" class="block text-gray-700">Sintomas</label>
          <textarea id="sintomas" name="sintomas" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" rows="4" placeholder="Descreva os sintomas, se houver"></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Agendar Consulta</button>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white pb-4 pt-8">
    <div class="container mx-auto px-4 flex flex-wrap justify-between">
      <!-- Links úteis -->
      <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
        <h3 class="text-xl font-bold mb-4">Links úteis</h3>
        <ul>
          <li><a href="#" class="hover:underline">Perguntas frequentes</a></li>
          <li><a href="#" class="hover:underline">Termos de serviço</a></li>
          <li><a href="#" class="hover:underline">Política de privacidade</a></li>
        </ul>
      </div>
      <!-- Informações de contato -->
      <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
        <h3 class="text-xl font-bold mb-4">Contato</h3>
        <p>Endereço: Rua Exemplo, 123</p>
        <p>Telefone: (00) 1234-5678</p>
        <p>Email: contato@example.com</p>
      </div>
      <!-- Navegação -->
      <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
        <h3 class="text-xl font-bold mb-4">Navegação</h3>
        <ul>
          <li><a href="#" class="hover:underline">Página Inicial</a></li>
          <li><a href="#" class="hover:underline">Sobre nós</a></li>
          <li><a href="#" class="hover:underline">Serviços</a></li>
          <li><a href="#" class="hover:underline">Contato</a></li>
        </ul>
      </div>
      <!-- Redes sociais -->
      <div class="w-full md:w-1/2 lg:w-1/4 mb-6 md:mb-0">
        <h3 class="text-xl font-bold mb-4">Siga-nos</h3>
        <ul>
          <li><a href="#" class="hover:underline">Facebook</a></li>
          <li><a href="#" class="hover:underline">Twitter</a></li>
          <li><a href="#" class="hover:underline">Instagram</a></li>
        </ul>
      </div>
    </div>
    <!-- Direitos Autorais -->
    <div class="mt-4">
      <p class="text-center">&copy; 2024 Todos os direitos reservados.</p>
    </div>
  </footer>

  <script src="public/src/js/main.js"></script>

</body>

</html>