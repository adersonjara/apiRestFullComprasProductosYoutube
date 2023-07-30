<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'subtotal', 'total'
    ];

    public function productos() // Una Compra puede pertenecer a varias instancias de Producto y viceversa.
    {
        return $this->belongsToMany(Producto::class)->withPivot('precio', 'cantidad', 'subtotal')->withTimestamps();
    }
}
