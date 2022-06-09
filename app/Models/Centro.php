<?php

namespace App\Models;

use App\Models\User;
use App\Models\Servico;
use App\Models\Favorito;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Centro extends Model {
    protected $fillable = [
        'nome',
        'nome_abreviado',
        'endereco',
        'valor_acesso',
        'detalhe',
        'imagem',
    ];

    public function favorited(User $user) {
        return $this->favoritos->contains('user_id', $user->id);
    }

    public function servicos() {
        return $this->hasMany(Servico::class);
    }

    public function favoritos() {
        return $this->hasMany(Favorito::class);
    }    
}
