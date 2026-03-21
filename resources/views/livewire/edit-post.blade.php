<div>
    <a class="btn btn-green" wire:click="$set('open', true)">
        <i class="fas fa-edit"></i>
    </a>


    <x-dialog-modal wire:model.live="open">
        <x-slot name="title">
            EDITAR EL POST
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

            @else
                <img class="mb-4 w-[1/1]" src="{{ Storage::url($post->image) }}" alt="">
            @endif

            <div class="mb-4">
                <x-label value="Titulo del post"/>
                <x-input wire:model.live="title" type="text" class="w-full"/>
                <x-input-error for="title" />
            </div>

            <div>
                <x-label value="Contenido del post"/>
                <textarea wire:model.live="content" class="form-control w-full rounded-lg" rows="6"></textarea>
                <x-input-error for="content" />
            </div>
             <input type="file" wire:model.defer="image" id="{{ $indetificator }}"
                    class="block w-full bg-layer border border-layer-line rounded-lg text-sm text-foreground placeholder:text-muted-foreground-1 focus:z-10 focus:outline-hidden focus:border-primary-focus focus:ring-1 focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none file:bg-surface file:border-0 file:me-4 file:py-3 file:px-4 cursor-pointer" />

        </x-slot>

        <x-slot name="footer">

            <x-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-secondary-button>

            <x-danger-button class="ms-3" wire:click="save" wire:loading.attr="disabled" class="disabled:opacity-25">
                Actualizar
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>
