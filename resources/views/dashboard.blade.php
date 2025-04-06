<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>
            Movisat OS Int
        </title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    </head>

    <body class="font-roboto bg-gray-100">
        <div class="min-h-screen flex">
            <!-- Sidebar -->
            <div class="flex flex-col w-64 bg-white shadow-lg">
                <div class="flex items-center justify-center h-20 border-b">

                </div>
                <nav class="flex-1 px-2 py-4 space-y-2">
                    <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-200 rounded-md" href="#">
                        <i class="fas fa-home mr-3">
                        </i>
                        Início
                    </a>
                    <a class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md" href="#">
                        <i class="fas fa-user-cog mr-3">
                        </i>
                        Acessos
                    </a>
                    <a class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md" href="#">
                        <i class="fas fa-file-export mr-3">
                        </i>
                        Exportar Dados
                    </a>
                    <a class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md" href="#">
                        <i class="fas fa-file-export mr-3">
                        </i>
                        Importar Dados
                    </a>
                    <a class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md" href="#">
                        <i class="fas fa-file-export mr-3">
                        </i>
                        Sei lá o que
                    </a>
                </nav>
            </div>
            <!-- Main Content -->
            <div class="flex-1 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold">
                        Controle das Ordens de Serviço Técnico
                    </h1>
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-md">
                        Nova Ordem de Serviço
                    </button>
                </div>
                <!-- Grid -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Status
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Nome do Cliente
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Controle Interno
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Ultima edição
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-purple-900 leading-tight">
                                        <span aria-hidden="true"
                                            class="absolute inset-0 bg-purple-200 opacity-50 rounded-full">
                                        </span>
                                        <span class="relative">
                                            OS Iniciada
                                        </span>
                                    </span>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    Cliente A
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    12345
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    01/01/2023
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        Alterar Status
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900 ml-4">
                                        Enviar Link
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900 ml-4">
                                        Enviar E-mail
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span class="relative inline-block px-3 py-1 font-semibold text-blue-900 leading-tight">
                                        <span aria-hidden="true"
                                            class="absolute inset-0 bg-blue-200 opacity-50 rounded-full">
                                        </span>
                                        <span class="relative">
                                            OS Em andamento
                                        </span>
                                    </span>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    Cliente A
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    12345
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    01/01/2023
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        Alterar Status
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900 ml-4">
                                        Enviar Link
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900 ml-4">
                                        Enviar E-mail
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                        <span aria-hidden="true"
                                            class="absolute inset-0 bg-orange-200 opacity-50 rounded-full">
                                        </span>
                                        <span class="relative">
                                            OS Analisada
                                        </span>
                                    </span>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    Cliente A
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    12345
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    01/01/2023
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        Alterar Status
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900 ml-4">
                                        Enviar Link
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900 ml-4">
                                        Enviar E-mail
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden="true"
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                        </span>
                                        <span class="relative">
                                            OS Finalizada
                                        </span>
                                    </span>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    Cliente A
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    12345
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    01/01/2023
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        Alterar Status
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900 ml-4">
                                        Enviar Link
                                    </button>
                                    <button class="text-blue-600 hover:text-blue-900 ml-4">
                                        Enviar E-mail
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
