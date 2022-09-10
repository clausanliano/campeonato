<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
    use HasFactory;

    protected $table = 'provas';

    protected $fillable = ['nome', 'observacao', 'campeonato_id'];


    public function campeonato()
    {
        return $this->belongsTo(Campeonato::class, 'campeonato_id', 'id');
    }

}
