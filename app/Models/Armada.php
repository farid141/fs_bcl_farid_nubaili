<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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
        return $this->hasMany(Pengiriman::class);
    }
    
    public function scopeSearch(Builder $query, array $filters): void
    {
        $query->where('kendaraan', 'like', '%'.$filters["kendaraan"]. '%')
        ->Where('ketersediaan', 'like', '%'.$filters["ketersediaan"]. '%');
    }
}
