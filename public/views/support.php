<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda e Suporte</title>
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
                <h1 class="text-3xl font-bold">Ajuda e Suporte</h1>
                <p class="text-lg">Encontre respostas e suporte para suas dúvidas e problemas</p>
            </div>
        </nav>
    </header>

    <!-- Main Section -->
    <main class="container mx-auto py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- FAQ Section -->
            <section class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">Perguntas Frequentes (FAQ)</h2>
                <div class="space-y-4">
                    <div>
                        <h3 class="font-semibold">Como agendar uma consulta?</h3>
                        <p class="text-gray-700">Para agendar uma consulta, vá até a página de agendamento, selecione a data, hora e o médico desejado, e clique em 'Confirmar'.</p>
                    </div>
                    <div>
                        <h3 class="font-semibold">Como acessar meus resultados de exames?</h3>
                        <p class="text-gray-700">Você pode acessar os resultados de seus exames na seção de resultados de exames do portal.</p>
                    </div>
                    <div>
                        <h3 class="font-semibold">Como entrar em contato com o suporte?</h3>
                        <p class="text-gray-700">Você pode entrar em contato com o suporte através do formulário de contato ou ligando para o número de suporte disponível.</p>
                    </div>
                </div>
            </section>

            <!-- Contact Form Section -->
            <section class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">Formulário de Contato</h2>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label class="block text-gray-700" for="name">Nome</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700" for="email">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700" for="message">Mensagem</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required></textarea>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">Enviar</button>
                </form>
            </section>

            <!-- Support Contact Information -->
            <section class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-bold mb-4">Informações de Contato</h2>
                <p class="text-gray-700 mb-4">Se precisar de mais assistência, entre em contato conosco através dos seguintes meios:</p>
                <ul class="space-y-2">
                    <li>
                        <h3 class="font-semibold">Telefone</h3>
                        <p class="text-gray-700">(00) 1234-5678</p>
                    </li>
                    <li>
                        <h3 class="font-semibold">Email</h3>
                        <p class="text-gray-700">suporte@example.com</p>
                    </li>
                    <li>
                        <h3 class="font-semibold">Endereço</h3>
                        <p class="text-gray-700">Rua Exemplo, 123, Bairro Exemplo, Cidade, Estado</p>
                    </li>
                </ul>
            </section>
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