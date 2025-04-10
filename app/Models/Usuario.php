<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
     /** @use HasFactory<\Database\Factories\UserFactory> */
     use HasFactory, Notifiable;

     protected $table = 'usuarios'; 
 
     /**
      * The attributes that are mass assignable.
      *
      * @var list<string>
      */
     protected $fillable = [
        'nome',
        'email',
        'senha',
        'tipo_acesso',
        'cpf',
        'telefone'
     ];
 
     /**
      * The attributes that should be hidden for serialization.
      *
      * @var list<string>
      */
     protected $hidden = [
         'password',
         'remember_token',
     ]; 
}
