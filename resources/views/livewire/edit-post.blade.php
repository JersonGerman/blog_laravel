<div>
    {{-- <a href="#" class="text-indigo-400 hover:text-indigo-9000">Edit</a> --}}
    <a href="#" class="btn btn-green" wire:click="$set('open', true)">
        <i class="fas fa-edit text-gray-50"></i>
    </a>

    <x-dialog-modal wire:model='open'>

        <x-slot name='title'>
            Editar el post
        </x-slot>

        <x-slot name='content'>

            <div wire:loading wire:target='image' class="mb-4 w-full bg-gray-800 border border-red-700 text-red-400 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold ">¡Imagen cargando!</strong>
                <span class="block sm:inline ">Espere un momento hasta que la imagen se haya procesado</span>
            </div>
            @if ($image)
                <img class="mb-4" src="{{$image->temporaryUrl()}}">
            @else
                <img class="mb-4" src="{{Storage::url($post->image)}}">
            @endif
            
            <div class="mb-4">
                <x-label value='Titulo del post' />
                <x-input wire:model='post.title' type='text' class="w-full"  />
            </div>

            <div>
                <x-label value='Contenido del post' />
                <textarea wire:model='post.content' rows="6" class="form-control w-full"></textarea>
            </div>

            <div>
                {{-- <input type="file"> --}}
                <input type="file" wire:model='image' id="{{$identificador}}" class="w-auto text-gray-900 border rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-400">
                <x-input-error for='image' />
            </div>
        </x-slot>

        <x-slot name='footer'>
            <x-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-secondary-button>
            <x-danger-button wire:click='save' wire:loading.attr='disabled' class="disabled:opacity-25 ml-2">
                Actualizar
            </x-danger-button>
        </x-slot>
        
    </x-dialog-modal>
</div>
