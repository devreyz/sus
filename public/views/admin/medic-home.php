<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração - Médico</title>
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
                <h1 class="text-3xl font-bold">Painel de Administração - Médico</h1>
                <p class="text-lg">
                    Bem-vindo, Dr. Nome do Médico!
                </p>
            </div>
        </nav>
    </header>

    <!-- Main Section -->
    <section class="container mx-auto py-8">
        <div class="mb-8">
            <h2 class="text-xl font-bold mb-4">Consultas Agendadas</h2>
            <ul class="divide-y divide-gray-200">
                <!-- Consulta 1 -->
                <li class="py-4">
                    <h3 class="text-lg font-bold">Consulta com Dr. Exemplo</h3>
                    <p>Data: 15/04/2024</p>
                    <!-- Adicione mais detalhes da consulta conforme necessário -->
                </li>
                <!-- Consulta 2 -->
                <li class="py-4">
                    <h3 class="text-lg font-bold">Consulta de Rotina</h3>
                    <p>Data: 20/04/2024</p>
                    <!-- Adicione mais detalhes da consulta conforme necessário -->
                </li>
                <!-- Adicione mais consultas agendadas aqui -->
            </ul>
        </div>

        <!-- Botão para página de agendamento -->
        <div>
            <a href="/agendar" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Agendar Consulta</a>
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