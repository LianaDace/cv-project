@vite('resources/css/app.css')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard')}}
        </h2>
    </x-slot>

<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Resume') }}
        </h2>
    </x-slot>

<!-- component -->
<div class="md:px-32 py-8 w-full">
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
            <tr>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date Created</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
            </tr>
            </thead>
            <tbody class="text-gray-700">
            @foreach($lists as $resume)
            <tr>
                <td class="w-1/3 text-left py-3 px-4">{{$resume->id}}</td>
                <td class="w-1/3 text-left py-3 px-4">{{$resume->name}}</td>
                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">{{$resume->created_at}}</a></td>
                <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:jonsmith@mail.com"></a>
              <span class="text-yellow-500 flex">
                  <a href="/show/{{$resume->id}}">
              <img src="https://raw.githubusercontent.com/FortAwesome/Font-Awesome/d3a7818c253fcbafff9ebd1d4abb2866c192e1d7/svgs/regular/eye.svg" class="h-5 w-5 text-green-700 mx-2" viewBox="0 0 20 20" fill="currentColor">
                  </a>
                  <a href="/edit/{{$resume->id}}">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700 mx-2" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/>
                  <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"/>
              </svg>
                      </a>
                  <form action="/delete/{{$resume->id}}" method="post">
                      @csrf
                      @method('delete')
                  <button type="submit" href="/delete/{{$resume->id}}">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-700" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                      </button>
                      </svg>
                  </form>

              </span>

            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

</div>
</x-app-layout>
