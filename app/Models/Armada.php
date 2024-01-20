<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pengiriman;

class Armada extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $guarded = ['id'];
    
    public function pengiriman()
    {
        return $this->hasOne(Pengiriman::class);
    }
}
