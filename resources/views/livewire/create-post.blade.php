<div>
    <x-danger-button wire:click.prevent="open=true">
        Crear Nuevo post
    </x-danger-button>

    <x-dialog-modal wire:model.live="open">
        <x-slot name="title">
            CREAR NUEVO POST
        </x-slot>
        <x-slot name="content">
            <div wire:loading wire:target="image"
                class="mb-4 bg-green-100 border border-green-400 text-green-600 px-4 py-3 rounded relative"
                role="alert">
                <strong class="font-bold">!Imagen cargando !</strong>
                <span class="block sm:inline">Espere un momento hasta que la imagen se haya cargado</span>
            </div>
            @if ($image)
                <img class="mb-4 w-[1/1]" src="{{ $image->temporaryUrl() }}" alt="">
            @endif
            <div class="mb-4">
                <x-label value="Titulo del post" />
                <x-input type="text" class="w-full" wire:model.defer="title" wire:loading.disabled
                    wire:target="save" />
                <x-input-error for="title" />
            </div>
            <div class="mb-4">
                <x-label value="Contenido del post" />
                <textarea wire:model.defer="content" class="form-control w-full rounded-lg" rows="6" wire:loading.disabled
                    wire:target="save"></textarea>
                <x-input-error for="content" />
            </div>

            <div>
                <a class="cursor-pointer">
                    <label class="sr-only">Seleccione una imagen</label>
                </a>
                <input type="file" wire:model.defer="image" id="{{ $indetificator }}"
                    class="block w-full bg-layer border border-layer-line rounded-lg text-sm text-foreground placeholder:text-muted-foreground-1 focus:z-10 focus:outline-hidden focus:border-primary-focus focus:ring-1 focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none file:bg-surface file:border-0 file:me-4 file:py-3 file:px-4 cursor-pointer" />

                <x-input-error for="image" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click.prevent="open=false">
                Cancelar
            </x-secondary-button>

            <x-danger-button wire:click="save" wire:target="save, image" wire:loading.attr="disabled"
                class="ms-3 disabled:opacity-25">
                Crear Post
            </x-danger-button>
        </x-slot>

    </x-dialog-modal>

</div>
