@props(['class' => ''])

<div x-data="{ open: false }" class="relative {{ $class }}">
    <button @click="open = !open" class="flex items-center justify-center w-10 h-10 text-gray-500 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9.5a18.03 18.03 0 01-4.438-5.5m4.438 5.5L13 21m-2.652-9.5M6 12a6 6 0 1112 0v1a6 6 0 01-12 0v-1zm12 0a6 6 0 00-12 0v1a6 6 0 0012 0v-1z"></path></svg>
    </button>

    <div
        x-show="open"
        @click.away="open = false"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute z-50 mt-2 w-32 rounded-md shadow-lg {{ app()->getLocale() == 'ar' ? 'start-0' : 'end-0' }}"
        style="display: none;"
    >
        <div class="rounded-md ring-1 ring-black ring-opacity-5 bg-white dark:bg-gray-700 py-1">
            <a href="{{ route('language.switch', 'en') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">English</a>
            <a href="{{ route('language.switch', 'ar') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">العربية</a>
        </div>
    </div>
</div>
