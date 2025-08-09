<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('general.cv_builder_title') }}
        </h2>
    </x-slot>

    <div
        x-data="{
            cvData: {
                fullName: 'John Doe',
                email: 'john.doe@example.com',
                phone: '+123456789',
                address: '123 Main Street, Anytown, USA'
            }
        }"
        class="py-12"
    >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Left Column: Form Inputs -->
                <div class="lg:col-span-1">
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-200 mb-4">
                            {{ __('general.personal_information') }}
                        </h3>

                        <div class="space-y-4">
                            <!-- Full Name -->
                            <div>
                                <x-input-label for="fullName" :value="__('general.full_name')" />
                                <x-text-input id="fullName" class="block mt-1 w-full" type="text" x-model="cvData.fullName" />
                            </div>

                            <!-- Email -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" x-model="cvData.email" />
                            </div>

                             <!-- Phone -->
                            <div>
                                <x-input-label for="phone" :value="__('general.phone_number')" />
                                <x-text-input id="phone" class="block mt-1 w-full" type="tel" x-model="cvData.phone" />
                            </div>

                             <!-- Address -->
                            <div>
                                <x-input-label for="address" :value="__('general.address')" />
                                <x-text-input id="address" class="block mt-1 w-full" type="text" x-model="cvData.address" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: CV Preview -->
                <div class="lg:col-span-2">
                    <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                        <div class="p-8">
                            <!-- CV Header -->
                            <div class="text-center border-b-2 border-gray-200 dark:border-gray-700 pb-4">
                                <h1 class="text-4xl font-bold text-gray-900 dark:text-gray-100" x-text="cvData.fullName"></h1>
                                <div class="flex justify-center items-center gap-x-6 gap-y-1 mt-2 text-sm text-gray-600 dark:text-gray-400 flex-wrap">
                                    <span x-text="cvData.email"></span>
                                    <span class="hidden sm:inline">|</span>
                                    <span x-text="cvData.phone"></span>
                                    <span class="hidden sm:inline">|</span>
                                    <span x-text="cvData.address"></span>
                                </div>
                            </div>

                            <!-- CV Body (Placeholder for future sections) -->
                            <div class="mt-8">
                                <h2 class="text-xl font-bold text-primary-600 dark:text-primary-400 border-b border-gray-200 dark:border-gray-700 pb-1 mb-4 uppercase tracking-wider">
                                    {{ __('general.professional_experience') }}
                                </h2>
                                <p class="text-gray-500 dark:text-gray-400">{{ __('Your professional experience will appear here.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
