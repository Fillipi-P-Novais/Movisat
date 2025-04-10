@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Cadastrar Novo Usuário</h2>

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf

        @include('usuarios.partials.form', ['submit' => 'Cadastrar'])       

    </form>
</div>
@endsection
