<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Exames</title>
    <!-- Adicione o link para o CSS do Tailwind -->
    <link rel="stylesheet" href="public/views/css/style.css" type="text/css" media="all" />
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="shadow bg-gradient-to-r from-blue-800 to-blue-500 text-white py-4">
        <nav class="mx-auto px-4 container flex gap-6 items-center">
            <div>
                <img class="w-20 h-20" src="public/assets/sus-brasil-logo.svg" alt="SUS Brasil">
            </div>
            <div class="container mx-auto">
                <h1 class="text-3xl font-bold">Resultados de Exames</h1>
                <p class="text-lg">Acesse os resultados dos seus exames aqui</p>
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
        <div class="mb-8">
            <h2 class="text-xl font-bold mb-4">Meus Exames</h2>
            <ul class="divide-y divide-gray-200">
                <!-- Exame 1 -->
                <li class="py-4 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-bold">Hemograma Completo</h3>
                        <p class="text-gray-700">Data: 10/04/2024</p>
                        <p class="text-gray-700">Status: Disponível</p>
                    </div>
                    <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Ver Resultado</a>
                </li>
                <!-- Exame 2 -->
                <li class="py-4 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-bold">Teste de Glicemia</h3>
                        <p class="text-gray-700">Data: 15/03/2024</p>
                        <p class="text-gray-700">Status: Disponível</p>
                    </div>
                    <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Ver Resultado</a>
                </li>
                <!-- Exame 3 -->
                <li class="py-4 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-bold">Radiografia de Tórax</h3>
                        <p class="text-gray-700">Data: 20/02/2024</p>
                        <p class="text-gray-700">Status: Disponível</p>
                    </div>
                    <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Ver Resultado</a>
                </li>
                <!-- Adicione mais exames aqui -->
            </ul>
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

</body>

</html>