@props(['type', 'message'])

@if ($type == 'error')

    <div id="toast-danger" class="absolute bottom-1 right-2 flex items-center w-full max-w-xs p-4 mb-4 text-red-800 bg-red-300 rounded-lg shadow toasts" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-red-800 text-red-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
            </svg>
            <span class="sr-only">Error icon</span>
        </div>
        <div class="ms-3 text-sm font-normal">{{ str_replace(" register", "", $message)}}</div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-800 text-red-200 hover:text-red-100 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-red-600 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-danger" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>

@elseif ($type == 'success')

    <div id="toast-success" class="absolute bottom-1 right-3 flex items-center w-full max-w-xs p-4 mb-4 text-green-800 bg-green-300 rounded-lg shadow toasts" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-green-800 text-green-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ms-3 text-sm font-normal">{{$message}}</div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-800 text-green-200 hover:text-green-100 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-green-600 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-danger" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>

@elseif ($type == 'alert')

    <div id="toast-warning" class="absolute bottom-1 right-3 flex items-center w-full max-w-xs p-4 mb-4 text-orange-700 bg-orange-300 rounded-lg shadow toasts" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-orange-700 text-orange-100">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>
            </svg>
            <span class="sr-only">Warning icon</span>
        </div>
        <div class="ms-3 text-sm font-normal">{{$message}}</div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-orange-700 text-orange-100 hover:text-orange-50 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-orange-600 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-danger" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>

@endif
