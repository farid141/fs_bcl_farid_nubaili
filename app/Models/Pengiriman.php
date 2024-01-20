<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Armada;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengiriman extends Model
{
    use HasFactory;

    protected $table = 'pengirimans';
    public $timestamps = false;
    protected $guarded = ['id'];
    
    public function Armada():BelongsTo
    {
        return $this->belongsTo(Armada::class, 'id_armada');
    }
}
