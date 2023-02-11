<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $fillable=[
        'lote',
        'cantidad',
        'vencimiento',
        'producto_id'
    ];
    //relacion de uno a mucho inversa
    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
