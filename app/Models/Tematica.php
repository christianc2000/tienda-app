<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tematica extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'imagen'
    ];
    //relacion de uno a muchos
    public function productoTematicas()
    {
        return $this->hasMany(ProductoTematica::class);
    }
}
