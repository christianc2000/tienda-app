<div>
    {{-- In work, do what you enjoy. --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- component -->

        <div class="bg-white">

            <div class="mx-auto max-w-2xl py-4 px-4 sm:py-6 sm:px-6 lg:max-w-7xl lg:px-8">
                <x-jet-input class="w-full" wire:model="search" type="text" placeholder="Buscar Productos..." />
                
                <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

                    @if (count($productos) > 0)
                        @foreach ($productos as $p)
                            <div class="cursor-pointer group relative">
                                <div
                                    class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">

                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($p->images as $img)
                                        @if ($i == 1)
                                            <img src="{{ asset($img['url']) }}"
                                                alt="Front of men&#039;s Basic Tee in black."
                                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                                        @endif
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach

                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="#">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                {{ $p->nombre }}
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">{{ $p->stock }} unidades disponibles
                                        </p>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">Bs{{ $p->precio_venta }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="mt-1 text-sm text-gray-500">No existe ningun registro</p>
                    @endif

                    <!-- More products... -->
                </div>
            </div>
        </div>
    </div>
</div>
