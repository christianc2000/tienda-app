<div wire:init="loadProductos">
    {{-- In work, do what you enjoy. --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- component -->

        <div class="bg-white">

            <div class="mx-auto max-w-2xl py-4 px-4 sm:py-6 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="py-2 flex items-center">
                    <div class="flex items-center">

                        <select wire:model="cant"
                            class="mx-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value='10'>10</option>
                            <option value='25'>25</option>
                            <option value='50'>50</option>
                            <option value='100'>100</option>

                        </select>
                    </div>
                    <x-jet-input class="flex-1 mx-2" wire:model="search" type="text"
                        placeholder="Buscar Productos..." />
                    @livewire('create-producto')
                </div>

                <div class="mt-6 grid grid-cols-2 gap-y-10 gap-x-6 sm:grid-cols-3 lg:grid-cols-5 xl:gap-x-8">

                    @if (count($productos) > 0)

                        @foreach ($productos as $p)
                            <div class="group relative m-1">
                                <div
                                    class="min-h-40 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-40">


                                    <img src="{{ asset($p->imagen) }}" alt="Front of men&#039;s Basic Tee in black."
                                        class="h-40 w-full object-cover object-center sm:h-40 sm:w-full lg:h-40 lg:w-full">

                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            {{ $p->nombre }}
                                            <!--a nombre-->
                                        </h3>

                                        <p class="mt-1 text-sm text-gray-500">{{ $p->stock }} unidades
                                            disponibles
                                        </p>

                                    </div>
                                    <p class="text-sm font-medium text-gray-900">Bs{{ $p->precio_venta }}
                                    </p>

                                </div>
                                {{-- @livewire('edit-producto',['producto'=>$p],key($p->id)) --}}
                                <div class="float-right">
                                    <x-jet-secondary-button wire:click="editar({{ $p }})"><i
                                            class="fas fa-edit"></i>
                                    </x-jet-secondary-button>
                                    <x-jet-secondary-button wire:click="$emit('deleteProducto',{{ $p->id }})"> <i
                                            class="fas fa-trash"></i></x-jet-secondary-button>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="mt-1 text-sm text-gray-500">No existe ningun registro</p>
                    @endif

                    <!-- More products... -->
                </div>
                @if (count($productos) > 0)
                    @if ($productos->hasPages())
                        <div>
                            {{ $productos->links() }}
                        </div>
                    @endif
                @endif

            </div>
        </div>
    </div>

    <x-jet-dialog-modal wire:model="openEdit">
        <x-slot name="title">
            Editar producto
        </x-slot>
        <x-slot name="content">
            <div class="grid w-full h-full grid-cols-1 items-start gap-y-8 gap-x-6 sm:grid-cols-12 lg:gap-x-8">
                <div class="aspect-w-2 aspect-h-3 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                    <div wire:loading wire:target="imagen"
                        class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">¡Imagen cargando!</strong>
                        <span class="block sm:inline">Espere un momento hasta que la imagen se procese</span>

                    </div>

                    @if ($imagen)
                        <div
                            class="aspect-w-2 aspect-h-3 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                            <img src="{{ $imagen->temporaryUrl() }}" alt="" class="object-cover object-center">
                        </div>
                    @else
                        <div
                            class="aspect-w-2 aspect-h-3 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                            <img src="{{ asset($producto->imagen) }}" alt="" class="object-cover object-center">
                        </div>
                    @endif


                </div>
                <div class="sm:col-span-8 lg:col-span-7">
                    <div class="mb-4">
                        <x-jet-label value="Código del producto" />
                        <x-jet-input type="text" class="w-full" wire:model.defer="producto.codigo" />
                        <x-jet-input-error for="codigo" />
                    </div>
                    <div class="mb-4">
                        <x-jet-label value="Nombre del producto" />
                        <x-jet-input type="text" class="w-full" wire:model.defer="producto.nombre" />
                        <x-jet-input-error for="nombre" />
                    </div>
                    <div class="mb-4">

                        <x-jet-label value="Detalle" />
                        <x-jet-input type="text" class="w-full" wire:model.defer="producto.detalle" />
                        <x-jet-input-error for="detalle" />
                    </div>
                    <div class="mb-4 grid grid-cols-3 gap-4">
                        <div class="col-span-1 ...">
                            <x-jet-label value="Stock" />
                            <x-jet-input type="number" class="w-full" wire:model.defer="producto.stock" />
                            <x-jet-input-error for="stock" />
                        </div>
                        <div class="col-span-1 ...">
                            <x-jet-label value="Precio Compra" />
                            <x-jet-input type="number" class="w-full" min="1" step="any"
                                wire:model.defer="producto.precio_compra" />
                            <x-jet-input-error for="precio_compra" />
                        </div>
                        <div class="col-span-1 ...">
                            <x-jet-label value="Precio Venta" />
                            <x-jet-input type="number" class="w-full" min="1" step="any"
                                wire:model.defer="producto.precio_venta" />
                            <x-jet-input-error for="precio_venta" />
                        </div>

                    </div>
                    <div class="mb-4 grid grid-cols-4 gap-4">
                        <div class="col-span-2">
                            <x-jet-label value="Tipo Producto" />
                            <select id="tipo_producto_id" wire:model.defer="producto.tipo_producto_id"
                                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option selected hidden>Seleccione un tipo de producto</option>
                                @foreach ($tipoProductos as $tp)
                                    <option value="{{ $tp->id }}">{{ $tp->tipo }}
                                    </option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="tipo_producto_id" />
                        </div>
                        <div class="col-span-2">
                            <x-jet-label value="Tematica" />
                            <select id="tematica_id" wire:model.defer="tematica.id"
                                class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option selected hidden>Seleccione una tematica</option>
                                @foreach ($tematicas as $t)
                                    <option value="{{ $t->id }}">{{ $t->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="tematica_id" />
                        </div>

                    </div>
                    <div class="mb-4">
                        <x-jet-label value="Imagen" />
                        <input type="file" accept="image/*" wire:model="imagen" id="{{ $identificador }}">
                        <x-jet-input-error for="imagen" />
                    </div>
                </div>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button class="mr-1" wire:click="$set('openEdit',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="update()" wire:loading.attr="disabled" class="disabled:opacity-25">
                Actualizar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>

    @push('js')
        <script src="sweetalert2.all.min.js"></script>
        <script>
            Livewire.on('deleteProducto', productoId => {
                Swal.fire({
                    title: 'Estás seguro?',
                    text: "¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar esto!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        //emitir un evento desde javascript
                        Livewire.emitTo('show-productos', 'delete', productoId)

                        Swal.fire(
                            'Eliminado!',
                            'Su producto ha sido eliminado.',
                            'success'
                        )
                    }
                })
            })
        </script>
    @endpush
</div>
