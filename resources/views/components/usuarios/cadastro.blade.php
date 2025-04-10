<div class="container mt-4">
    <h2 class="mb-2">Cadastrar Novo Usuário</h2>

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf

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
            <input type="password" name="senha" class="form-control" {{ isset($usuario) ? '' : 'required' }} placeholder="mínimo: 1 letra, 1 caracter especial, 8 números">
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
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancelar</a>

    </form>
</div>
   