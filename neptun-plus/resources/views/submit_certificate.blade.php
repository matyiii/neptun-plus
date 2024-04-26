<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl mb-4 font-bold">Igazolás leadása hiányzásról</h1>
                    <div class="flex mb-4">
                        <input type="text" id="searchInput" class="shadow-sm bg-gray-50 mr-2 px-3 py-2 rounded focus:outline-none focus:ring focus:ring-indigo-500 focus:ring-opacity-50 w-full" placeholder="Keresés kurzus neve alapján..." value="{{ $searchTerm }}">
                    </div>
                    <div>
                        @if ($searchTerm)
                            @if ($courses->isEmpty())
                                <p>Nincs találat a keresésre.</p>
                            @else
                                <ul id="coursesList">
                                    @foreach ($courses as $course)
                                        @if (str_contains(strtolower($course->subject->name), strtolower($searchTerm)) || str_contains(strtolower($course->subject->type), strtolower($searchTerm)))
                                            <li>{{ $course->subject->name }} - {{ $course->subject->type }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        @endif
                    </div>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
