<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    use HasFactory;

    protected $table ='campeonatos';

    protected $fillable = ['nome', 'abertura', 'encerramento', 'observacao'];

    protected $dates = ['abertura', 'encerramento'];


    public function provas()
    {
        return $this->hasMany(Prova::class, 'campeonato_id', 'id');
    }


}
