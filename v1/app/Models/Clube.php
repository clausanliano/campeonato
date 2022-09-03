<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clube extends Model
{
    use HasFactory;

    protected $table = 'clubes';

    protected $fillable = ['nome', 'endereco', 'observacao', 'telefone', 'site', 'email', 'instagram', 'twitter', 'logotipo'];

    public function pasta_logotipo()
    {
        return 'imagens'.DIRECTORY_SEPARATOR.'logotipos';
    }

    public function caminho_logotipo()
    {
        if (isset($this->logotipo)) {
            return 'storage'.DIRECTORY_SEPARATOR.$this->pasta_logotipo().DIRECTORY_SEPARATOR.$this->logotipo;
        } else {
            return 'storage'.DIRECTORY_SEPARATOR.$this->pasta_logotipo().DIRECTORY_SEPARATOR.'sem_imagem.png';
        }
    }

}
