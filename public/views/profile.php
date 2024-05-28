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
    <title>Perfil do Usuário</title>
    <!-- Adicione o link para o CSS do Tailwind -->
    <link rel="stylesheet" href="public/views/css/style.css" type="text/css" media="all" />
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="shadow bg-gradient-to-r from-blue-700 to-blue-500 text-white py-4 flex items-center">
        <nav class="mx-auto px-4 container flex gap-6 items-center">
            <div class="">
                <img class="w-20 h-20" src="public/assets/sus-brasil-logo.svg" alt="" />
            </div>
            <div class="container mx-auto">
                <h1 class="text-3xl font-bold">Perfil do Usuário</h1>
                <p class="text-lg">
                    Visualize e edite suas informações pessoais.
                </p>
            </div>


            <div class="profile-icon relative">
                <!-- User Information -->
                <div class="flex flex-col items-center  cursor-pointer">
                    <div class="w-12 h-12 relative rounded-full overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" src="public/assets/profile.jpg" alt="" />

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



    <!-- Main Section -->
    <section class="container mx-auto py-8">
        <div class="mb-8 bg-white rounded-lg shadow-md p-6">
            <!-- Profile Picture -->
            <div class="flex flex-col items-center">
                <img class="w-32 h-32 rounded-full mb-4" src="public/assets/profile.jpg" alt="Foto do Usuário">
                <h2 class="text-2xl font-bold mb-2"><?= $_SESSION["username"] ?></h2>
                <p class="text-gray-600"><?= $_SESSION["email"] ?></p>
            </div>

            <!-- Personal Information -->
            <div class="mt-6">
                <h3 class="text-xl font-semibold mb-4">Informações Pessoais</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Nome:</label>
                        <p class="text-gray-800">Fulano da Silva</p>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Email:</label>
                        <p class="text-gray-800">fulano@example.com</p>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Telefone:</label>
                        <p class="text-gray-800">(00) 1234-5678</p>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Data de Nascimento:</label>
                        <p class="text-gray-800">01/01/1990</p>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Endereço:</label>
                        <p class="text-gray-800">Rua Exemplo, 123</p>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Cidade:</label>
                        <p class="text-gray-800">Exemplópolis</p>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Estado:</label>
                        <p class="text-gray-800">Exemplostado</p>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">CEP:</label>
                        <p class="text-gray-800">12345-678</p>
                    </div>
                </div>
            </div>

            <!-- Other Information -->
            <div class="mt-6">
                <h3 class="text-xl font-semibold mb-4">Outras Informações</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Profissão:</label>
                        <p class="text-gray-800">Desenvolvedor de Software</p>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Empresa:</label>
                        <p class="text-gray-800">Empresa Exemplo</p>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Biografia:</label>
                        <p class="text-gray-800">Desenvolvedor apaixonado por tecnologia e inovação, sempre em busca de novos desafios e aprendizado.</p>
                    </div>
                </div>
            </div>

            <!-- Edit Button -->
            <div class="mt-6 flex justify-center">
                <a href="edit-profile" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Editar Perfil</a>
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

    <script src="public/src/js/main.js"></script>



</body>

</html>