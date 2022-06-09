<?php

namespace App\Models;

use App\Models\Centro;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'tipo',
        'centro_id',
        'preco',
        'telefone',
        'telefone_alt',
        'imagem',
    ];


    public function centro() {
        return $this->belongsTo(Centro::class);
    }

    public function imagens() {
        return $this->hasMany(Imagem::class);
    } 
}
