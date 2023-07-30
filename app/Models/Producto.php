<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'cantidad_disponible', 'categoria_id', 'marca_id'
    ];

    public function categoria() // Un Producto pertenece a una única Categoría.
    {
        return $this->belongsTo(Categoria::class);
    }

    public function marca() // Un Producto pertenece a una única Marca.
    {
        return $this->belongsTo(Marca::class);
    }

    public function compras() // Un Producto puede pertenecer a varias instancias de Compra y viceversa.
    {
        return $this->belongsToMany(Compra::class)->withPivot('precio', 'cantidad', 'subtotal')->withTimestamps();
    }
}
