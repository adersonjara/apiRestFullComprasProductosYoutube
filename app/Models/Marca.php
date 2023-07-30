<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre','descripcion'
    ];

    public function productos() // Una Marca puede tener muchos productos asociados.
    {
        return $this->hasMany(Producto::class);
    }
}
