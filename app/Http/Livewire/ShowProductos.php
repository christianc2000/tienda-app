<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\Precio;
use App\Models\Producto;
use Livewire\Component;

class ShowProductos extends Component
{
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public function render()
    {
        $search = '%' . $this->search . '%';
        return view('livewire.show-productos', [
            'productos' => Producto::where('nombre', 'like', $search)->orWhere('precio_venta', 'like', $search)->orWhere('stock', 'like', $search)
                ->orderBy($this->sort, $this->direction)->get(),
        ]);
    }
}
