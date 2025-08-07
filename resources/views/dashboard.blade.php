<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Banner -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium">{{ __("Welcome back") }}, {{ Auth::user()->name }}!</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __("You are logged in. Let's build your professional future.") }}
                    </p>
                </div>
            </div>

            <!-- Quick Actions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- CV Builder Card -->
                <a href="{{ route('cv-builder.index') }}" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center">
                            <!-- Icon Placeholder -->
                            <div class="flex-shrink-0 bg-primary-500 text-white rounded-md h-12 w-12 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <div class="ms-4">
                                <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ __('CV Builder') }}</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Create and manage your CVs') }}</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Opportunity Hub Card (Placeholder) -->
                <div class="bg-white dark:bg-gray-800/50 overflow-hidden shadow-sm sm:rounded-lg cursor-not-allowed opacity-60">
                     <div class="p-6">
                        <div class="flex items-center">
                            <!-- Icon Placeholder -->
                            <div class="flex-shrink-0 bg-secondary-500 text-white rounded-md h-12 w-12 flex items-center justify-center">
                               <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <div class="ms-4">
                                <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ __('Opportunity Hub') }}</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Coming Soon') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Card (Placeholder) -->
                 <a href="{{ route('profile.edit') }}" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300">
                     <div class="p-6">
                        <div class="flex items-center">
                            <!-- Icon Placeholder -->
                            <div class="flex-shrink-0 bg-secondary-500 text-white rounded-md h-12 w-12 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <div class="ms-4">
                                <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ __('My Profile') }}</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Update your account details') }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
