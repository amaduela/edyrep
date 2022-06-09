<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SugestaoReclamacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'centro_id',
        'descricao',
        'estado'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
