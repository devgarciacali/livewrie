<div>
    <x-danger-button wire:click="$set('open', true)">
        Crear Nuevo post
    </x-danger-button>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            CREAR NUEVO POST
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-label value="Titulo del post" />
                <x-input type="text" class="w-full" wire:model.defer="title" wire:loading.disabled wire:target="save" />
                <x-input-error for="title" />
            </div>
            <div class="mb-4">
                <x-label value="Contenido del post" />
                <textarea wire:model.defer="content" class="form-control w-full rounded-lg" rows="6" wire:loading.disabled
                    wire:target="save"></textarea>
                <x-input-error for="content"/>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-secondary-button>

            <x-danger-button wire:click="save" wire:target="save" wire:loading.attr="disabled" class="ms-3 disabled:opacity-25">
                Crear Post
            </x-danger-button>
        </x-slot>

    </x-dialog-modal>

</div>
