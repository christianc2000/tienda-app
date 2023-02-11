<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    use HasFactory;
    protected $fillable=[
        'precio',
        'fecha_finalizado',
        'tipo',
        'producto_id'
    ];
    //relacion de uno a mucho inversa
    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
