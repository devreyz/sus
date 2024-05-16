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
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
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