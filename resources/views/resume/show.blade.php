@vite('resources/css/app.css')
<link rel="stylesheet" href="resources/css/app.css">
<x-app-layout>

    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Mans CV') }}
            </h2>
        </x-slot>
        </script>
        <div>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Your Resume') }}
                    <x-primary-button class="ml-3 space-x-1.5">
                        <a href="/download/{{$resume->id}}">
                            {{ __('DOWNLOAD AS PDF') }}
                        </a>
                    </x-primary-button>
                </h2>
            </x-slot>
            </script>


            <page size="A4">
                <div class="header">
                    <p class="username">{{$resume->name}}</p>
                    <p class="occupation">{{$resume->occupation}}</p>
                    <p class="about">{{ $resume->about }}</p>

                </div>


                <br>
                <div class="box">
                    <p class="box-title">Personas informācija</p>

                    <ul class="list">

                        <li>Vārds Uzvārds: {{$resume->name}}</li>
                        <li>Telefona nr: {{$resume->phone}}</li>
                        <li>E-pasts: {{$resume->email}}</li>
                        <li>Dzīves vieta: {{$resume->city}}</li>
                        <li>Pasta indekss: {{$resume->postal_code}}</li>
                    </ul>
                </div>
                <br>
                <hr>
                <div class="box">
                    <p class="box-title">Izglītība</p>

                    <ul class="list">
                        <li>Izglītības iestādes nosaukums: {{$resume->school_name}}</li>
                        <li>Studiju virziens: {{$resume->field_of_study}}</li>
                        <li>Izglītības līmenis: {{$resume->degree}}</li>
                        <li>Mācību laiks: {{$resume->graduation_start_date}} - {{$resume->graduation_date}}</li>
                    </ul>
                </div>
                <br>
                <hr>
                <div class="box">
                    <p class="box-title">Darba pieredze</>

                    <ul class="list">
                        <li>Nodarbošānās: {{$resume->job_title}}</li>
                        <li>Darba vieta: {{$resume->workplace}}</li>
                        <li>Darba apraksts: {{$resume->job_descripiton}}</li>
                        <li>Slodze: {{$resume->workload}}</li>
                        <li>Nodarbinātības periods: {{$resume->start_date}} - {{$resume->end_date}}</li>
                    </ul>
                </div>
                <br>
                <hr class="pt-3">
                <div class="box">
                    <p class="box-title">Par mani</>

                    <ul class="list">
                        <li>Intereses: {{$resume->interests}}</li>
                        <li>Hobiji: {{$resume->hobbies}}</li>
                    </ul>

                </div>
            </page>
</x-app-layout>




