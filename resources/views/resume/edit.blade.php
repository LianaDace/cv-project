@vite('resources/css/app.css')

<x-app-layout>

    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Your Resume') }}
            </h2>
        </x-slot>
        </script>
        <div>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Your Resume') }}
                </h2>
            </x-slot>

        </div>
    </div>


    <form class=" justify-center items-center" action="/edit/{{$resume->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <p class="text-xl font-semibold">Kontaktinformācija</p>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Vārds, uzvārds</label>
                        <input type="text" name="name" id="name" autocomplete="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->name}}">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Telefona nr.</label>
                        <input type="tel" name="phone" id="phone" autocomplete="phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->phone}}">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="email" class="block text-sm font-medium text-gray-700">E-pasts</label>
                        <input type="email" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->email}}">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="city" class="block text-sm font-medium text-gray-700">Dzīves vieta</label>
                        <input type="text" name="city" id="city" autocomplete="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->city}}">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="postal_code" class="block text-sm font-medium text-gray-700">Pasta indekss</label>
                        <input type="text" name="postal_code" id="postal_code" autocomplete="postal_code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->postal_code}}">
                    </div>
                </div>
                <br>
                <hr>
                <p class="text-xl font-semibold">Izglītība</p>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="school_name" class="block text-sm font-medium text-gray-700">Izglītības iestādes nosaukums</label>
                        <input type="text" name="school_name" id="school_name" autocomplete="school_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->school_name}}">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="field_of_study" class="block text-sm font-medium text-gray-700">Studiju virziens: </label>
                        <input type="text" name="field_of_study" id="field_of_study" autocomplete="field_of_study" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->field_of_study}}">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="degree" class="block text-sm font-medium text-gray-700">Izglītības līmenis: </label>
                        <input type="text" name="degree" id="degree" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->degree}}">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="graduation_start_date" class="block text-sm font-medium text-gray-700">Mācību uzsākšanas datums: </label>
                        <input type="date" name="graduation_start_date" id="graduation_start_date" autocomplete="graduation_start_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->city}}">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="graduation_date" class="block text-sm font-medium text-gray-700">Mācību uzsākšanas datums: </label>
                        <input type="date" name="graduation_date" id="graduation_date" autocomplete="graduation_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->city}}">
                    </div>
                </div>
                <br>
                <hr>
                <p  class="text-xl font-semibold">Izglītība</p>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="job_title" class="block text-sm font-medium text-gray-700">Nodarbošanās: </label>
                        <input type="text" name="job_title" id="job_title" autocomplete="job_title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->job_title}}">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="workload" class="block text-sm font-medium text-gray-700">Slodze: </label>
                        <input type="text" name="workload" id="workload" autocomplete="workload" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->workload}}">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="job_description" class="block text-sm font-medium text-gray-700">Darba apraksts: </label>
                        <input type="text" name="job_description" id="job_description" autocomplete="job_description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->job_descripiton}}">
                    </div>
                    <!-- WORK LOAD --->
                    <div class="col-span-6 sm:col-span-3">
                        <label for="start_date" class="block text-sm font-medium text-gray-700">Sākuma datums: </label>
                        <input type="date" name="start_date" id="start_date" autocomplete="start_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->start_date}}">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="end_date" class="block text-sm font-medium text-gray-700">Beigu datums: </label>
                        <input type="date" name="end_date" id="end_date" autocomplete="end_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->end_date}}">
                    </div>
                </div>
                <br>
                <hr>
                <p class="text-xl font-semibold">Par mani</p>
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="about" class="block text-sm font-medium text-gray-700">Par mani</label>
                        <textarea rows="4" type="text" name="about" id="about" autocomplete="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{$resume->about}}"</textarea>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="hobbies" class="block text-sm font-medium text-gray-700">Hobiji</label>
                        <input type="text" name="hobbies" id="hobbies" autocomplete="hobbies" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->hobbies}}">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="interests" class="block text-sm font-medium text-gray-700">Intereses</label>
                        <input type="text" name="interests" id="interests" autocomplete="interests" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{$resume->interests}}">
                    </div>

                </div>

                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <a href="/update/{{$resume->id}}">
                           <button class="border border-gray-700 bg-gray-700 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline" type="submit">UPDATE</button>
                        </a>
                </div>
            </div>
    </form>
        </div>
    </div>
</x-app-layout>