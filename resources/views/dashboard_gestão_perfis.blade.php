<html>
<head>
    <title>Login e Gerenciamento de Usuários</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 font-roboto">
    <div class="min-h-screen flex items-center justify-center mt-10">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-4xl">
            <h2 class="text-2xl font-bold mb-6 text-center">Gerenciamento de Usuários</h2>
            <div class="flex justify-end mb-4">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Novo Usuário
                </button>
            </div>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Nome</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Email</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Tipo</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300 text-left leading-tight">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Usuário Principal</td>
                        <td class="py-2 px-4 border-b border-gray-300">principal@example.com</td>
                        <td class="py-2 px-4 border-b border-gray-300">Administrador</td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" type="button">
                                Editar
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" type="button">
                                Excluir
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Técnico 1</td>
                        <td class="py-2 px-4 border-b border-gray-300">tecnico1@example.com</td>
                        <td class="py-2 px-4 border-b border-gray-300">Usuário</td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" type="button">
                                Editar
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" type="button">
                                Excluir
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Técnico 2</td>
                        <td class="py-2 px-4 border-b border-gray-300">tecnico2@example.com</td>
                        <td class="py-2 px-4 border-b border-gray-300">Usuário</td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" type="button">
                                Editar
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" type="button">
                                Excluir
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Técnico 3</td>
                        <td class="py-2 px-4 border-b border-gray-300">tecnico3@example.com</td>
                        <td class="py-2 px-4 border-b border-gray-300">Usuário</td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" type="button">
                                Editar
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" type="button">
                                Excluir
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Técnico 4</td>
                        <td class="py-2 px-4 border-b border-gray-300">tecnico4@example.com</td>
                        <td class="py-2 px-4 border-b border-gray-300">Usuário</td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" type="button">
                                Editar
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" type="button">
                                Excluir
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-300">Técnico 5</td>
                        <td class="py-2 px-4 border-b border-gray-300">tecnico5@example.com</td>
                        <td class="py-2 px-4 border-b border-gray-300">Usuário</td>
                        <td class="py-2 px-4 border-b border-gray-300">
                            <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" type="button">
                                Editar
                            </button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline" type="button">
                                Excluir
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>