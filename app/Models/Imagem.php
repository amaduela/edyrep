<?php

namespace App\Models;

use App\Models\Servico;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imagem extends Model {
    use HasFactory;
    
    protected $fillable = [
        'iamgem',
        'servico_id',
    ];
    /**
     * Get the servico that owns the Imagem
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function servico() {
        return $this->belongsTo(Servico::class);
    }
}
