<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable=[
        'codigo',
        'nombre',
        'imagen',
        'stock',
        'detalle',
        'nivel',
        'precio_compra',
        'precio_venta',
        'tipo_producto_id'
    ];
    //relacion de 1 a mucho polimorfica
    public function images(){
        return $this->morphMany(Image::class,'imageable');
    }
    //relacion de uno a muchos
    public function inventarios(){
        return $this->hasMany(Inventario::class);
    }
    public function precios(){
        return $this->hasMany(Precio::class);
    }
    public function productoTematicas(){
        return $this->hasMany(ProductoTematica::class);
    }
    public function productoContenedoresPadre(){
        return $this->hasMany(ProductoContenedor::class,'padre_id','id');
    }
    
    public function productoContenedoresHijo(){
        return $this->hasMany(ProductoContenedor::class,'hijo_id','id');
    }
    //relacion de uno a mucho inversa
    public function tipoProducto(){
        return $this->belongsTo(TipoProducto::class);
    }

}
