<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treinador extends Model
{
    use HasFactory;

    protected $table = 'treinadores';

    protected $fillable = ['nome', 'cpf', 'nascimento', 'email', 'telefone'];

    protected $dates = ['nascimento'];
}
