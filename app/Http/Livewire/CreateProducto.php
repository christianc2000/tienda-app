<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use App\Models\ProductoTematica;
use App\Models\Tematica;
use App\Models\TipoProducto;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProducto extends Component
{
    use WithFileUploads;

    public $open = false;

    public $codigo,
        $nombre,
        $detalle,
        $stock,
        $imagen,
        $tipo_producto_id,
        $precio_venta,
        $precio_compra,
        $tematica_id,
        $identificador;

    protected $rules = [
        'codigo' => 'required|unique:productos,codigo',
        'nombre' => 'required',
        'detalle' => 'required',
        'imagen' => 'required',
        'stock' => 'required',
        'precio_venta' => 'required',
        'precio_compra' => 'required',
        'tipo_producto_id' => 'required',
        'tematica_id' => 'required'
    ];
    public function mount()
    {
        $this->identificador = rand();
    }
    public function save()
    {
        $this->validate();

        /* $file = $this->imagen;
        $extension = $file->getClientOriginalExtension();
        $filename = time() . "." . $extension;
        $file->move('Imagenes/', $filename);
        $url = 'Imagenes/' . $filename;*/
        $imagen = '/storage/' . $this->imagen->store('Imagenes');

        $p = Producto::create([
            'codigo' => $this->codigo,
            'nombre' => $this->nombre,
            'detalle' => $this->detalle,
            'imagen' => $imagen,
            'stock' => $this->stock,
            'precio_venta' => $this->precio_venta,
            'precio_compra' => $this->precio_compra,
            'nivel' => 1,
            'tipo_producto_id' => $this->tipo_producto_id
        ]);
        ProductoTematica::create([
            'producto_id' => $p->id,
            'tematica_id' => $this->tematica_id
        ]);
        $this->reset(['open', 'codigo', 'nombre', 'detalle', 'imagen', 'stock', 'precio_venta', 'precio_compra', 'tipo_producto_id', 'tematica_id']);
        $this->identificador = rand();
        $this->emitTo('show-productos', 'render');
        $this->emit('alert', 'El producto se creo satisfactoriamente');
    }
    public function render()
    {
        $tipoProductos = TipoProducto::all();
        $tematicas = Tematica::all();
        return view('livewire.create-producto', compact('tipoProductos', 'tematicas'));
    }
    public function updatingOpen()
    {
        if (!$this->open) {
            $this->reset(['codigo', 'nombre', 'detalle', 'imagen', 'stock', 'precio_compra', 'precio_venta', 'tipo_producto_id', 'tematica_id']);
            $this->identificador = rand();
        }
    }
 
}
