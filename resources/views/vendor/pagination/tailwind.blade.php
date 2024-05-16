@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between mt-5">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium cursor-default leading-5 rounded-md bg-amarelo text-azul hover:text-blue-800 hover:bg-orange-400 focus:z-10 focus:outline-none focus:ring ring-red-500 focus:bg-orange-400 active:bg-orange-400 active:text-blue-800">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 rounded-md transition ease-in-out duration-150 bg-amarelo text-azul hover:text-blue-800 hover:bg-orange-400 focus:z-10 focus:outline-none focus:ring ring-red-500 focus:bg-orange-400 active:bg-orange-400 active:text-blue-800">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium leading-5 rounded-md transition ease-in-out duration-150 bg-amarelo text-azul hover:text-blue-800 hover:bg-orange-400 focus:z-10 focus:outline-none focus:ring ring-red-500 focus:bg-orange-400 active:bg-orange-400 active:text-blue-800">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium cursor-default leading-5 rounded-md bg-amarelo text-azul hover:text-blue-800 hover:bg-orange-400 focus:z-10 focus:outline-none focus:ring ring-red-500 focus:bg-orange-400 active:bg-orange-400 active:text-blue-800">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm leading-5 text-azul">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>

                {{-- DESKTOP --}}

                <span class="relative z-0 inline-flex rtl:flex-row-reverse shadow-sm rounded-md">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium cursor-default rounded-l-md leading-5 bg-amarelo text-azul hover:text-blue-800 hover:bg-orange-400 focus:z-10 focus:outline-none focus:ring ring-red-500 focus:bg-orange-400 active:bg-orange-400 active:text-blue-800" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-2 py-2 text-sm font-medium rounded-l-md leading-5 bg-amarelo text-azul hover:text-blue-800 hover:bg-orange-400 focus:z-10 focus:outline-none focus:ring ring-red-500 focus:bg-orange-400 active:bg-orange-400 active:text-blue-800 transition ease-in-out duration-150" aria-label="{{ __('pagination.previous') }}">
                            <svg class="w-5 h-5" fill="currentColor" stroke="currentColor" stroke-width="2" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5 dark:bg-gray-800 dark:border-gray-600">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium cursor-default leading-5 text-blue-800 bg-orange-400">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 bg-amarelo text-azul hover:text-blue-800 hover:bg-orange-400 focus:z-10 focus:outline-none focus:ring ring-red-500 focus:bg-orange-400 active:bg-orange-400 active:text-blue-800transition ease-in-out duration-150" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium rounded-r-md leading-5 bg-amarelo text-azul hover:text-blue-800 hover:bg-orange-400 focus:z-10 focus:outline-none focus:ring ring-red-500 focus:bg-orange-400 active:bg-orange-400 active:text-blue-800 transition ease-in-out duration-150" aria-label="{{ __('pagination.next') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium cursor-default rounded-r-md leading-5 bg-amarelo text-azul hover:text-blue-800 hover:bg-orange-400 focus:z-10 focus:outline-none focus:ring ring-red-500 focus:bg-orange-400 active:bg-orange-400 active:text-blue-800" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
