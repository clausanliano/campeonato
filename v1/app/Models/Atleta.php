<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atleta extends Model
{
    use HasFactory;

    protected $table = 'atletas';

    protected $fillable = ['cpf','nome', 'nascimento', 'email'];

    protected $dates = ['nascimento'];

}