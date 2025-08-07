<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-100 dark:bg-gray-900">
        <div class="relative min-h-screen">
            <!-- Header -->
            <header class="absolute top-0 left-0 right-0 z-10">
                <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-16">
                        <!-- Logo -->
                        <div>
                           <a href="/">
                                <x-application-logo class="w-12 h-12 fill-current text-gray-800 dark:text-gray-200" />
                           </a>
                        </div>

                        <!-- Login/Register Links -->
                        @if (Route::has('login'))
                            <div class="text-end">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-primary-500">{{ __('Dashboard') }}</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-primary-500">{{ __('Log in') }}</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-primary-500">{{ __('Register') }}</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </nav>
            </header>

            <main>
                <!-- Hero Section -->
                <section class="relative h-screen flex items-center justify-center text-center bg-white dark:bg-gray-800 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-500/20 via-transparent to-secondary-500/20 dark:from-primary-900/30 dark:to-secondary-900/30"></div>
                    <div class="relative z-10 max-w-4xl mx-auto px-4">
                        <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 dark:text-white tracking-tight">
                            {{ __('Build Your Future, Today.') }}
                        </h1>
                        <p class="mt-6 text-lg md:text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                            {{ __('The integrated ecosystem for job seekers, companies, and educational providers. Your professional journey starts here.') }}
                        </p>
                        <div class="mt-8 flex justify-center gap-4">
                            <a href="{{ route('register') }}" class="inline-block bg-primary-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-primary-700 transition-colors duration-300">
                                {{ __('Get Started') }}
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Features Section -->
                <section class="py-20 bg-gray-100 dark:bg-gray-900">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-center">
                            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">{{ __('Our Core Features') }}</h2>
                            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">{{ __('Tools designed for your success.') }}</p>
                        </div>
                        <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                            <!-- Feature 1: AI CV Builder -->
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                                <div class="flex-shrink-0 bg-primary-500 text-white rounded-md h-12 w-12 flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                </div>
                                <h3 class="mt-6 text-xl font-bold text-gray-900 dark:text-white">{{ __('AI CV Builder') }}</h3>
                                <p class="mt-2 text-base text-gray-600 dark:text-gray-400">{{ __('Create professional, ATS-friendly CVs with the power of AI.') }}</p>
                            </div>
                            <!-- Feature 2: Opportunity Hub -->
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                                <div class="flex-shrink-0 bg-primary-500 text-white rounded-md h-12 w-12 flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>
                                <h3 class="mt-6 text-xl font-bold text-gray-900 dark:text-white">{{ __('Opportunity Hub') }}</h3>
                                <p class="mt-2 text-base text-gray-600 dark:text-gray-400">{{ __('Access a curated list of jobs, scholarships, and courses.') }}</p>
                            </div>
                            <!-- Feature 3: Partner Portal -->
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                                <div class="flex-shrink-0 bg-primary-500 text-white rounded-md h-12 w-12 flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m-1 4h1m5-4h1m-1-4h1m-1 4h1m-1-4h1"></path></svg>
                                </div>
                                <h3 class="mt-6 text-xl font-bold text-gray-900 dark:text-white">{{ __('Partner Portal') }}</h3>
                                <p class="mt-2 text-base text-gray-600 dark:text-gray-400">{{ __('A dedicated dashboard for companies and universities to manage opportunities.') }}</p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <!-- Footer -->
            <footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center text-sm text-gray-500 dark:text-gray-400">
                    &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('All rights reserved.') }}
                </div>
            </footer>
        </div>
    </body>
</html>