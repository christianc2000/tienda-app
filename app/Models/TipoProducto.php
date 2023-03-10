<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo'
    ];
    //relacion de uno a muchos
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
