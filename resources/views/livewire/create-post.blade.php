<div>
    <x-danger-button wire:click="$set('open', true)">
        Crear nuevo  post
    </x-danger-button>

    <x-dialog-modal wire:model='open'>

        <x-slot name='title'>
            Crear nuevo post
        </x-slot>

        <x-slot name='content'>

            <div wire:loading wire:target='image' class="mb-4 w-full bg-gray-800 border border-red-700 text-red-400 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold ">¡Imagen cargando!</strong>
                <span class="block sm:inline ">Espere un momento hasta que la imagen se haya procesado</span>
            </div>
            @if ($image)
                <img class="mb-4" src="{{$image->temporaryUrl()}}" alt="">
            @endif

            <div class="mb-4">
                <x-label value='Titulo del post'></x-label>
                <x-input type='text' class="w-full" wire:model.defer='title'></x-input>
                <x-input-error for='title' />
            </div>

            <div class="mb-4">
                <x-label value='Contenido del post'></x-label>
                <div wire:ignore>
                    <textarea id="editor" wire:ignore
                        rows="8" 
                        class="form-control w-full" 
                        wire:model.defer='content'>
                    </textarea>
                </div>
                <x-input-error for='content' />
            </div>

            <div class="">
                {{-- <input type="file"> --}}
                <input type="file" wire:model='image' id="{{$identificador}}" class="w-auto text-gray-900 border rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-800 dark:border-gray-800 dark:placeholder-gray-400">
                <x-input-error for='image' />
            </div>
        </x-slot>
        
        <x-slot name='footer'>
            <x-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-secondary-button>

            <x-danger-button wire:click='save' wire:loading.attr='disabled' wire:target='save, image' class="disabled:opacity-25 ml-2">
                Crear post
            </x-danger-button>

            {{-- <span class="text-gray-50" wire:loading wire:target='save'>Cargando...</span> --}}
        </x-slot>
        
    </x-dialog-modal>
    
    @push('js')
        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then(function (editor) {
                    editor.model.document.on('change:data', () =>{
                        @this.set('content', editor.getData())
                    });
                    Livewire.on('resetCKeditor', () => {
                        editor.setData('');
                    })

                })
                .catch( error => {
                    console.error( error );
                } );
            
            
            
        </script>
    @endpush
    
</div>
