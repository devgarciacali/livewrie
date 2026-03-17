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
                <x-input type="text" class="w-full" wire:model.live="title" />
                <x-input-error for="title" />
            </div>
            <div class="mb-4">
                <x-label value="Contenido del post" />
                <textarea wire:model.live="content" class="form-control w-full rounded-lg" rows="6"></textarea>
                <x-input-error for="content" />
            </div>
        </x-slot>

        <x-slot name="footer">

            <x-secondary-button wire:click="$set('open', false)" wire:loading.attr="disabled">
                Cancelar
            </x-secondary-button>

            <x-danger-button class="ms-3" wire:click="save" wire:loading.attr="disabled">
                Crear Post
            </x-danger-button>

        </x-slot>

    </x-dialog-modal>

</div>
