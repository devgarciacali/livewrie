<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- TABLE --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="px-6 py-4">
            <x-input type="text" class="w-full" placeholder="Escriba que es lo que busca" wire:model.live="search" />
        </div>

        <x-tabla>
            @if ($posts->count())
                <table class="min-w-full divide-y divide-gray-200">
                    <!-- HEADER -->
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="flex items-center cursor-pointer px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase"
                                wire:click="order('id')">
                                ID
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
                            <th class="cursor-pointer px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase"
                                wire:click="order('title')">
                                TITLE
                                {{-- SORT --}}
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
                            <th class="cursor-pointer px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase"
                                wire:click="order('content')">
                                CONTENT
                                {{-- SORT --}}
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
                            <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <!-- BODY -->
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($posts as $post)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $post->id }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-700">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $post->title }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-700">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $post->content }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-right text-sm">
                                    <a href="" class="text-yellow-400 hover:text-yellow-700 flex">✏️ Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="px-6 py-4">
                    No hay registros coincidente
                </div>
            @endif
        </x-tabla>

    </div>
    {{-- FIN TABLE --}}

</div>
