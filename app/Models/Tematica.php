<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\ErrorHandler\Collecting;

class Tematica extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];
    //relacion de uno a muchos
    public function productoTematicas()
    {
        return $this->hasMany(ProductoTematica::class);
    }
    
}
