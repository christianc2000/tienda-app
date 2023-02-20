<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\Precio;
use App\Models\Producto;
use App\Models\Tematica;
use App\Models\TipoProducto;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowProductos extends Component
{  use WithFileUploads, WithPagination;

    public $producto,
        $tematica,
        $imagen,
        $identificador;
    public $openEdit = false;
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '10';
    public $readyToLoad = false;


    protected $listeners = ['render', 'delete'];


    protected $queryString = [
        'cant' => ['except' => '10'],
        'search' => ['except' => '']
    ];
    //EDIT

    protected $rules = [
        'producto.codigo' => 'required',
        'producto.nombre' => 'required',
        'producto.detalle' => 'nullable',
        'producto.imagen' => 'required',
        'producto.stock' => 'required',
        'producto.precio_venta' => 'required',
        'producto.precio_compra' => 'required',
        'producto.tipo_producto_id' => 'required',
        'tematica.id' => 'required'
    ];


    public function mount()
    {
        $this->identificador = rand();
        $this->producto = new Producto();
    }


    //***************************** */

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $search = '%' . $this->search . '%';
        if ($this->readyToLoad) {
            $productos = Producto::where('nombre', 'like', $search)->orWhere('precio_venta', 'like', $search)->orWhere('stock', 'like', $search)
                ->orderBy($this->sort, $this->direction)->paginate($this->cant);
        } else {
            $productos = [];
        }

        return view('livewire.show-productos', [
            'productos' => $productos,
            'tipoProductos' => TipoProducto::all(),
            'tematicas' => Tematica::all()
        ]);
    }

    public function delete(Producto $producto)
    {
        $producto->delete();
    }
    public function editar(Producto $p)
    {
        //$producto=Producto::find($id);
        $this->producto = $p;
        $this->openEdit = true;
        $this->tematica = $p->productoTematicas->first()->tematica;
    }

    public function update()
    {
        $this->validate();

        if ($this->imagen) {
            Storage::delete([$this->producto->imagen]);
            //    $this->producto->imagen->storeDe;
            $this->producto->imagen = '/storage/' . $this->imagen->store('Imagenes');
        }
        $this->producto->save();

        $this->reset(['openEdit', 'imagen']);
        $this->identificador = rand();

        //  $this->emitTo('show-productos', 'render');
        $this->emit('alert', 'El producto se actualizó satisfactoriamente');
    }
    public function loadProductos()
    {
        $this->readyToLoad = true;
    }
}
