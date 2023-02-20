<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoContenedor extends Model
{
    use HasFactory;
    protected $fillable = [
        'padre_id',
        'hijo_id'
    ];
    public function padre(){
        return $this->belongsTo(Producto::class,'padre_id','id');
    }
    public function hijo(){
        return $this->belongsTo(producto::class,'hijo_id','id');
    }

}
