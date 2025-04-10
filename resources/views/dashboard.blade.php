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

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


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
                    {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#modalCadastroUsuario" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">
                        <i class="fas fa-user-cog mr-3"></i>
                        Usuários / versão usando modal
                    </a> --}}
                    <button id="carregarCadastroUsuario" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200 rounded-md">
                        <i class="fas fa-user-cog mr-3"></i>
                        Usuários
                    </button>
                    
                   
                </nav>
            </div>
            <!-- Main Content -->
            <div class="flex-1 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold">
                        Controle das Ordens de Serviço Técnico
                    </h1>                   
                </div>
                <!-- Grid -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div id="usuarios-content"></div>                    
                </div>
            </div>
        </div>

        <!-- Modal de Cadastro de Usuário -->
    <div class="modal fade" id="modalCadastroUsuario" tabindex="-1" aria-labelledby="modalCadastroUsuarioLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="modalCadastroUsuarioLabel">Cadastrar Novo Usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                {{-- Formulário --}}
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ old('nome', $usuario->nome ?? '') }}" required>
                </div>
    
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $usuario->email ?? '') }}" required>
                </div>
    
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control" {{ isset($usuario) ? '' : 'required' }}>
                </div>
    
                <div class="mb-3">
                    <label for="senha_confirmation" class="form-label">Confirmar Senha</label>
                    <input type="password" name="senha_confirmation" class="form-control" {{ isset($usuario) ? '' : 'required' }}>
                </div>
    
                <div class="mb-3">
                    <label for="tipo_acesso" class="form-label">Tipo de Acesso</label>
                    <input type="number" name="tipo_acesso" class="form-control" value="{{ old('tipo_acesso', $usuario->tipo_acesso ?? '') }}" required>
                </div>
    
                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" name="cpf" class="form-control" maxlength="11" value="{{ old('cpf', $usuario->cpf ?? '') }}" required>
                </div>
    
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" name="telefone" class="form-control" maxlength="11" value="{{ old('telefone', $usuario->telefone ?? '') }}" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Cadastrar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    
    <script>
        document.getElementById('carregarCadastroUsuario').addEventListener('click', function (e) {
            e.preventDefault();
    
            fetch("{{ route('usuarios.form') }}")
                .then(response => response.text())
                .then(html => {
                    document.getElementById('usuarios-content').innerHTML = html;
                })
                .catch(error => {
                    console.error('Erro ao carregar formulário:', error);
                });
        });
    </script>
    
    </body>    
</html>
