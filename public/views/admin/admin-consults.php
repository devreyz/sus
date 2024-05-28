<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração Médica</title>
    <link rel="stylesheet" href="public/views/css/style.css" type="text/css" media="all" />

</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="shadow bg-gradient-to-r from-blue-800 to-blue-500 text-white py-4 flex items-center">
        <div class="mx-auto px-4 container flex gap-6 items-center">
            <div>
                <img class="w-20 h-20" src="public/assets/sus-brasil-logo.svg" alt="Logo Médico" />
            </div>
            <div class="container mx-auto">
                <h1 class="text-3xl font-bold">Administração Médica</h1>
                <p class="text-lg">Gerencie suas consultas e pacientes</p>
            </div>
        </div>
    </header>

    <!-- Navbar Section -->
    <section class="menu bg-blue-800 shadow-md sticky top-0 text-white py-4">
        <div class="container mx-auto flex justify-center">
            <nav>
                <ul class="flex gap-8">
                    <li class="nav-link"><a href="/">Página Inicial</a></li>
                    <li class="nav-link"><a href="?app=consults">Consultas</a></li>
                    <li class="nav-link"><a href="?app=patients">Pacientes</a></li>
                    <li class="nav-link"><a href="#">Relatórios</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Main Content -->
    <section class="container mx-auto py-8">
        <h2 class="text-2xl font-bold mb-4">Consultas Agendadas</h2>
        <!-- Componente de Busca -->
        <div class="mb-4 flex items-center justify-between">
            <input type="text" class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent w-1/3" placeholder="Buscar paciente ou consulta...">
            <button class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Buscar
            </button>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hora</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Paciente</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Local</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Médico</th>
                        <th scope="col" class="relative px-6 py-3"><span class="sr-only">Ações</span></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Linha de dados -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">15/05/2024</td>
                        <td class="px-6 py-4 whitespace-nowrap">09:00</td>
                        <td class="px-6 py-4 whitespace-nowrap">Fulano da Silva</td>
                        <td class="px-6 py-4 whitespace-nowrap">Hospital Exemplo</td>
                        <td class="px-6 py-4 whitespace-nowrap">Dr. Exemplo</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex gap-3">
                                <button onclick="openModal('modal-1')" class="action-button text-indigo-800 px-3 rounded-lg border border-indigo-500 hover:bg-indigo-600 hover:text-white transition-colors duration-200">Detalhes</button>
                                <a href="#" class="text-indigo-800 px-3 rounded-lg border border-indigo-500 hover:bg-indigo-600 hover:text-white">Editar</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Mais linhas de dados -->
                </tbody>
            </table>
        </div>

        <!-- Paginação -->
        <div class="mt-4 flex justify-between">
            <span class="text-sm text-gray-700">Mostrando 1 a 10 de 50 resultados</span>
            <div class="inline-flex">
                <button class="px-4 py-2 text-sm text-white bg-blue-500 rounded-l-md hover:bg-blue-600">Anterior</button>
                <button class="px-4 py-2 text-sm text-white bg-blue-500 rounded-r-md hover:bg-blue-600">Próximo</button>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="modal-1" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                            Detalhes da Consulta
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">
                                Data: 15/05/2024<br>
                                Hora: 09:00<br>
                                Paciente: Fulano da Silva<br>
                                Local: Hospital Exemplo<br>
                                Médico: Dr. Exemplo<br>
                                <!-- Adicione mais detalhes conforme necessário -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button onclick="closeModal('modal-1')" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Fechar
                </button>
            </div>


            <script>
                function openModal(modalId) {
                    document.getElementById(modalId).classList.remove('hidden');
                }

                function closeModal(modalId) {
                    document.getElementById(modalId).classList.add('hidden');
                }
            </script>

</body>

</html>