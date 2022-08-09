<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfis';

    protected $fillable = ['nome', 'descricao'];

    public function permissoes()
    {
        return $this->belongsToMany(Permissao::class);
    }


    public function usuarios()
    {
        return $this->belongsToMany(User::class);
    }

}
