<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <x-jet-danger-button wire:click="$set('open',true)">
        Crear nuevo Producto
    </x-jet-danger-button>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear nuevo producto
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
                           
                        </div>
                    @endif


                </div>
                <div class="sm:col-span-8 lg:col-span-7">
                    <div class="mb-4">
                        <x-jet-label value="Código del producto" />
                        <x-jet-input type="text" class="w-full" wire:model.defer="codigo" />
                        <x-jet-input-error for="codigo" />
                    </div>
                    <div class="mb-4">
                        <x-jet-label value="Nombre del producto" />
                        <x-jet-input type="text" class="w-full" wire:model.defer="nombre" />
                        <x-jet-input-error for="nombre" />
                    </div>
                    <div class="mb-4">

                        <x-jet-label value="Detalle" />
                        <x-jet-input type="text" class="w-full" wire:model.defer="detalle" />
                        <x-jet-input-error for="detalle" />
                    </div>
                    <div class="mb-4 grid grid-cols-3 gap-4">
                        <div class="col-span-1 ...">
                            <x-jet-label value="Stock" />
                            <x-jet-input type="number" class="w-full" wire:model.defer="stock" />
                            <x-jet-input-error for="stock" />
                        </div>
                        <div class="col-span-1 ...">
                            <x-jet-label value="Precio Compra" />
                            <x-jet-input type="number" class="w-full" min="1" step="any"
                                wire:model.defer="precio_compra" />
                            <x-jet-input-error for="precio_compra" />
                        </div>
                        <div class="col-span-1 ...">
                            <x-jet-label value="Precio Venta" />
                            <x-jet-input type="number" class="w-full" min="1" step="any"
                                wire:model.defer="precio_venta" />
                            <x-jet-input-error for="precio_venta" />
                        </div>

                    </div>
                    <div class="mb-4 grid grid-cols-4 gap-4">
                        <div class="col-span-2">
                            <x-jet-label value="Tipo Producto" />
                            <select id="tipo_producto_id" wire:model.defer="tipo_producto_id"
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
                            <select id="tematica_id" wire:model.defer="tematica_id"
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
            <x-jet-secondary-button class="mr-1" wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save,imagen"
                class="disabled:opacity-25">
                Crear Producto
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>
