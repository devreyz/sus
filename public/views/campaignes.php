<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campanhas de Saúde</title>
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
                <h1 class="text-3xl font-bold">Campanhas de Saúde</h1>
                <p class="text-lg">Fique por dentro das campanhas e programas de saúde</p>
            </div>
        </nav>
    </header>

    <!-- Main Section -->
    <main class="container mx-auto py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Campanha 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img class="h-40 w-full object-cover mb-4" src="https://via.placeholder.com/400x200" alt="Campanha 1">
                <h2 class="text-xl font-bold mb-2">Campanha de Vacinação</h2>
                <p class="text-gray-700 mb-4">Participe da nossa campanha de vacinação e proteja sua saúde.</p>
                <a href="#" class="text-blue-500 hover:underline">Saiba mais</a>
            </div>
            <!-- Campanha 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img class="h-40 w-full object-cover mb-4" src="https://via.placeholder.com/400x200" alt="Campanha 2">
                <h2 class="text-xl font-bold mb-2">Prevenção ao Câncer</h2>
                <p class="text-gray-700 mb-4">Acompanhe as nossas ações para a prevenção do câncer.</p>
                <a href="#" class="text-blue-500 hover:underline">Saiba mais</a>
            </div>
            <!-- Campanha 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img class="h-40 w-full object-cover mb-4" src="https://via.placeholder.com/400x200" alt="Campanha 3">
                <h2 class="text-xl font-bold mb-2">Saúde Mental</h2>
                <p class="text-gray-700 mb-4">Conheça nossas iniciativas para cuidar da saúde mental.</p>
                <a href="#" class="text-blue-500 hover:underline">Saiba mais</a>
            </div>
            <!-- Adicione mais campanhas conforme necessário -->
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