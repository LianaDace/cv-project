<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a new resume') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $pages[$currentPage]['heading'] }}</h3>
                            <p class="mt-1 text-sm text-gray-600">{{ $pages[$currentPage]['subheading'] }}</p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        @if ($errors->isNotEmpty())
                            <div class="text-sm bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <strong class="font-bold">Oops!</strong>
                                <span class="block sm:inline">There are some errors with your submission.</span>
                            </div>
                        @endif
                        @if ($success)
                            <div class="text-sm bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <span class="block sm:inline">{{ $success }}</span>
                                <span wire:click="resetSuccess" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                </span>
                            </div>
                        @endif
                        <form wire:submit.prevent="submit">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    @if ($currentPage === 1)
                                        <div class="flex flex-col">
                                            <div class="w-full py-2">
                                                <label for="name" class="block text-sm font-medium text-gray-700">Vārds Uzvārds</label>
                                                <input wire:model.lazy="name" type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Vārds Uzvārds">
                                                @error('name') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="phone" class="block text-sm font-medium text-gray-700">Telefona nr.</label>
                                                <input wire:model.lazy="phone" type="tel" name="phone" id="phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Telefona nr">
                                                @error('phone') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="email_address" class="block text-sm font-medium text-gray-700">E-pasts</label>
                                                <input wire:model.lazy="email" type="text" name="email" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="E-pasts">
                                                @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="city" class="block text-sm font-medium text-gray-700">Dzīves vieta</label>
                                                <input wire:model.lazy="city" type="text" name="city" id="city"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Dzīves vieta">
                                                @error('city') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="postal_code" class="block text-sm font-medium text-gray-700">Pasta indekss</label>
                                                <input wire:model.lazy="postal_code" type="text" name="postal_code" id="postal_code"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Pasta indekss">
                                                @error('postal_code') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    @elseif ($currentPage === 2)
                                        <div class="flex flex-col">
                                            <div class="w-full py-2">
                                                <label for="school_name" class="block text-sm font-medium text-gray-700">Izglītības iestādes nosaukums</label>
                                                <input wire:model.lazy="school_name" type="text" name="school_name" id="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Izglītības iestādes nosaukums">
                                                @error('school_name') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="field_of_study" class="block text-sm font-medium text-gray-700">Studiju virziens</label>
                                                <input wire:model.lazy="field_of_study" type="text" name="field_of_study" id="field_of_study" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Studiju virziens">
                                                @error('field_of_study') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="w-full py-2">
                                                    <label for="degree" class="block text-sm font-medium text-gray-700">Izglītības līmenis</label>
                                                    <input wire:model.lazy="degree" type="text" name="degree" id="degree" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Izglītības līmenis">
                                                    @error('degree') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="w-full py-2">
                                                    <label for="graduation_start_date" class="block text-sm font-medium text-gray-700">Mācību uzsākšanas datums</label>
                                                    <input wire:model.lazy="graduation_start_date" type="date" name="graduation_start_date" id="graduation_start_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder=">Mācību uzsākšanas datums">
                                                    @error('graduation_start_date') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="w-full py-2">
                                                    <label for="graduation_date" class="block text-sm font-medium text-gray-700">Mācību beigu datums</label>
                                                    <input wire:model.lazy="graduation_date" type="date" name="graduation_date" id="graduation_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Mācību beigu datums">
                                                    @error('graduation_date') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                </div>
                                        </div>
                                            @elseif ($currentPage === 3)
                                                <div class="flex flex-col">
                                                    <div class="w-full py-2">
                                                        <label for="job_title" class="block text-sm font-medium text-gray-700">Nodarbošānās</label>
                                                        <input wire:model.lazy="job_title" type="text" name="job_title" id="job_title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Job Title">
                                                        @error('job_title') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="w-full py-2">
                                                        <label for="workplace" class="block text-sm font-medium text-gray-700">Darba vietas nosaukums</label>
                                                        <input wire:model.lazy="workplace" type="text" name="workplace" id="workplace" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Occupation">
                                                        @error('workplace') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <div class="w-full py-2">
                                                            <label for="job_description" class="block text-sm font-medium text-gray-700">Darba pienākumi</label>
                                                            <input wire:model.lazy="job_description" type="text" name="job_description" id="job_description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Darba pienākumi">
                                                            @error('job_description') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                        </div>
                                                        <div class="w-full py-2">
                                                            <label for="work_load" class="block text-sm font-medium text-gray-700">Slodze</label>
                                                            <input wire:model.lazy="work_load" type="text" name="work_load" id="job_description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Slodze">
                                                            @error('work_load') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                        </div>
                                                        <div class="w-full py-2">
                                                            <label for="start_date" class="block text-sm font-medium text-gray-700">Sākuma datums</label>
                                                            <input wire:model.lazy="start_date" type="date" name="start_date" id="graduation_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Start Date">
                                                            @error('start_date') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                        </div>
                                                        <div class="w-full py-2">
                                                            <label for=end_date" class="block text-sm font-medium text-gray-700">Beigu datums</label>
                                                            <input wire:model.lazy="end_date" type="date" name="end_date" id="graduation_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="End Date">
                                                            @error('end_date') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                    @elseif ($currentPage === 4)
                                                        <div class="flex flex-col">
                                                            <div class="w-full py-2">
                                                                <label for="about" class="block text-sm font-medium text-gray-700">Par mani</label>
                                                                <input wire:model.lazy="about" type="text" name="about" id="about" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Pastāsti par sevi">
                                                                @error('about') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                            </div>
                                                            <div class="w-full py-2">
                                                                <label for="hobbies" class="block text-sm font-medium text-gray-700">Hobiji</label>
                                                                <input wire:model.lazy="hobbies" type="text" name="hobbies" id="hobbies" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Hobiji">
                                                                @error('hobbies') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                            </div>
                                                            <div class="flex flex-col">
                                                                <div class="w-full py-2">
                                                                    <label for="interests" class="block text-sm font-medium text-gray-700">Intereses</label>
                                                                    <input wire:model.lazy="interests" type="text" name="interests" id="interests" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Intereses">
                                                                    @error('interests') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                                                </div>
                                                            </div>
                                                            @endif
                                </div>
                                <div class="flex items-center justify-between px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    @if ($currentPage === 1)
                                        <div></div>
                                    @else
                                        <button wire:click="goToPreviousPage" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                                            Back
                                        </button>
                                    @endif
                                    @if ($currentPage === count($pages))
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Submit
                                        </button>
                                    @else
                                        <button wire:click="goToNextPage" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Next
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
