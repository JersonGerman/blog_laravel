<div wire:init='loadPosts()'>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

      {{-- This example requires Tailwind CSS v2.0+.. --}}
      <x-table>
        {{-- <ul role="list" class="divide-y divide-gray-800">
          <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
              <img class="h-12 w-12 flex-none rounded-full dark:bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 dark:text-gray-50">Leslie Alexander</p>
                <p class="mt-1 truncate text-xs leading-5 dark:text-gray-500">leslie.alexander@example.com</p>
              </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
              <p class="text-sm leading-6 dark:text-gray-50">Co-Founder / CEO</p>
              <p class="mt-1 text-xs leading-5 dark:text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
            </div>
          </li>
          <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
              <img class="h-12 w-12 flex-none rounded-full dark:bg-gray-50" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 dark:text-gray-50">Michael Foster</p>
                <p class="mt-1 truncate text-xs leading-5 dark:text-gray-500">michael.foster@example.com</p>
              </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
              <p class="text-sm leading-6 dark:text-gray-50">Co-Founder / CTO</p>
              <p class="mt-1 text-xs leading-5 dark:text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
            </div>
          </li>
          <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
              <img class="h-12 w-12 flex-none rounded-full dark:bg-gray-50" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 dark:text-gray-50">Dries Vincent</p>
                <p class="mt-1 truncate text-xs leading-5 dark:text-gray-500">dries.vincent@example.com</p>
              </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
              <p class="text-sm leading-6 dark:text-gray-50">Business Relations</p>
              <div class="mt-1 flex items-center gap-x-1.5">
                <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                  <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                </div>
                <p class="text-xs leading-5 dark:text-gray-500">Online</p>
              </div>
            </div>
          </li>
          <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
              <img class="h-12 w-12 flex-none rounded-full dark:bg-gray-50" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 dark:text-gray-50">Lindsay Walton</p>
                <p class="mt-1 truncate text-xs leading-5 dark:text-gray-500">lindsay.walton@example.com</p>
              </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
              <p class="text-sm leading-6 dark:text-gray-50">Front-end Developer</p>
              <p class="mt-1 text-xs leading-5 dark:text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
            </div>
          </li>
          <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
              <img class="h-12 w-12 flex-none rounded-full dark:bg-gray-50" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 dark:text-gray-50">Courtney Henry</p>
                <p class="mt-1 truncate text-xs leading-5 dark:text-gray-500">courtney.henry@example.com</p>
              </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
              <p class="text-sm leading-6 dark:text-gray-50">Designer</p>
              <p class="mt-1 text-xs leading-5 dark:text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
            </div>
          </li>
          <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
              <img class="h-12 w-12 flex-none rounded-full dark:bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 dark:text-gray-50">Tom Cook</p>
                <p class="mt-1 truncate text-xs leading-5 dark:text-gray-500">tom.cook@example.com</p>
              </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
              <p class="text-sm leading-6 dark:text-gray-50">Director of Product</p>
              <div class="mt-1 flex items-center gap-x-1.5">
                <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                  <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                </div>
                <p class="text-xs leading-5 dark:text-gray-500">Online</p>
              </div>
            </div>
          </li>
        </ul> --}}

        <div class="px-6 py-4 flex items-center">
          {{-- <input type="text" wire:model='search'> --}}
          <div class="flex items-center ">
            <span class="text-gray-400">Mostrar</span>
            <select class="mx-2 form-control" wire:model='cant'>
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>
            </select>

            <span class="text-gray-400">Entradas</span>
          </div>
          <x-input  wire:model='search' type='text' class="flex-1 mx-4" placeholder='Escriba que quiere buscar'></x-input>
          @livewire('create-post')
        </div>

        @if (count($posts))

          <table class="min-w-full divide-y divide-gray-800">
            <thead class="bg-gray-800">
              <tr>
                <th scope="col" 
                    class="w-24 cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-normal"
                    wire:click="order('id')">
                  ID
                  {{-- Sort --}}
                  @if ($sort == 'id')
                    @if ($direction == 'asc')
                      <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                    @else
                      <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                    @endif
                  @else
                    <i class="fas fa-sort float-right mt-1"></i>
                  @endif
                </th>
                <th scope="col" 
                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-normal"
                    wire:click="order('title')">
                  TITLE

                  {{-- Sort --}}
                  @if ($sort == 'title')
                    @if ($direction == 'asc')
                      <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                    @else
                      <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                    @endif
                  @else
                    <i class="fas fa-sort float-right mt-1"></i>
                  @endif
                </th>
                <th scope="col" 
                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-50 uppercase tracking-normal"
                    wire:click="order('content')">
                  CONTENT
                  {{-- Sort --}}
                  @if ($sort == 'content')
                    @if ($direction == 'asc')
                      <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                    @else
                      <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                    @endif
                  @else
                    <i class="fas fa-sort float-right mt-1"></i>
                  @endif
                </th>
                {{-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-normal">
                  Role
                </th> --}}
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>

            <tbody class="bg-gray-900 divide-y divide-gray-800">
              @foreach ($posts as $item)

                <tr>
                  {{-- <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-10 w-10">
                        <img  class="h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                      </div>
                      <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900">
                          Jane Cooper
                        </div>
                        <div class="text-sm text-gray-500">
                          jane.cooper@example.com
                        </div>
                      </div>
                    </div>
                  </td> --}}
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-50">
                      {{$item->id}}
                    </div>
                    {{-- <div class="text-sm text-gray-500">Optimization</div> --}}
                  </td>
                  <td class="px-6 py-4 ">
                    {{-- <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-gray-500">
                      Active
                    </span> --}}
                    <div class="text-sm text-gray-200">
                      {{$item->title}}
                    </div>
                  </td>
                  <td class="px-6 py-4  text-sm">
                    <div class="text-sm text-gray-400">
                      {!! $item->content !!}
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-mediun">
                    {{-- @livewire('edit-post', ['post' => $post], key($post->id)) --}}
                    <a href="#" class="btn btn-green" wire:click="edit({{$item}})">
                      <i class="fas fa-edit text-gray-50"></i>
                    </a>

                    <a href="#" class="btn btn-red ml-2"
                        wire:click="$emit('deletePost', {{$item->id}})" >
                      <i class="fas fa-trash text-gray-50"></i>
                    </a>
                  </td>
                </tr>

              @endforeach
            </tbody>
          </table>

          @if ($posts->hasPages())
            <div class="px-6 py-3 text-gray-50">
              {{$posts->links('vendor.pagination.tailwind')}}
              {{-- {{$posts->links()}} --}}
            </div>
          @endif

        @else
            <div class="py-6 px-4 text-gray-400">
              No existe ningún registro coincidente
            </div>
        @endif

       
        

      </x-table>
              
              
    </div>

    <x-dialog-modal wire:model='open_edit'>

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
          @elseif ($post->image)
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
          <x-secondary-button wire:click="$set('open_edit', false)">
              Cancelar
          </x-secondary-button>
          <x-danger-button wire:click='update' wire:loading.attr='disabled' class="disabled:opacity-25 ml-2">
              Actualizar
          </x-danger-button>
      </x-slot>
      
  </x-dialog-modal>

  @push('js')
    {{-- <script src="sweetalert2.all.min.js"></script> --}}
    <script>

      Livewire.on('deletePost', postId => {
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {

            Livewire.emitTo('show-posts', 'delete', postId);

            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            );
          }
        });
      })
      
    </script>
  @endpush
  
</div>
