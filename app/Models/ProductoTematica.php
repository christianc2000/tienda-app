<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoTematica extends Model
{
    use HasFactory;
    protected $fillable = [
        'producto_id',
        'tematica_id'
    ];
    //relación de uno a muchos inversa
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
    public function tematica()
    {
        return $this->belongsTo(Tematica::class);
    }
}
