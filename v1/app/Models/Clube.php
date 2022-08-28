<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clube extends Model
{
    use HasFactory;

    protected $table = 'clubes';

    protected $fillable = ['nome', 'endereco', 'observacao', 'telefone', 'site', 'email', 'instagram', 'twitter', 'logotipo'];

}
