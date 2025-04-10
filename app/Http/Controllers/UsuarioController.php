<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'senha' => 'required|string|min:6|confirmed',
            'tipo_acesso' => 'required|numeric|max:9',
            'cpf' => 'required|string|max:11',
            'telefone' => 'required|string|max:11'
        ]);
    
        Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'tipo_acesso' => $request->tipo_acesso,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'senha' => Hash::make($request->senha),
        ]);
    
        return redirect()->route('usuarios.index')->with('success', 'Usuário criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios,email,' . $usuario->id,
            'tipo_acesso' => 'required|numeric|max:9',
            'cpf' => 'required|string|max:11',
            'telefone' => 'required|string|max:11',
            'senha' => 'nullable|string|min:6|confirmed',
        ]);
    
        $usuario->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'tipo_acesso' => $request->tipo_acesso,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'senha' => $request->filled('senha') ? Hash::make($request->senha) : $usuario->senha,
        ]);
    
        return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuário removido com sucesso!');
    }
}
