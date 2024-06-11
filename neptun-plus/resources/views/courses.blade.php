

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl mb-4 font-bold">Felvett kurzusok</h1>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-gray-700 uppercase">Tárgy kódja</th>
                                    <th class="px-6 py-3 text-gray-700 uppercase">Tárgy neve</th>
                                    <th class="px-6 py-3 text-gray-700 uppercase">Kurzus kódja</th>
                                    <th class="px-6 py-3 text-gray-700 uppercase">Órák</th>
                                    <th class="px-6 py-3 text-gray-700 uppercase">Jegyek</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user->courses as $course)
                                    <tr>
                                        <td class="px-6 py-4 text-center">
                                            <div class="text-sm text-gray-900">{{ $course->subject->code }}</div>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <div class="text-sm text-gray-900">{{ $course->subject->name }} -
                                                {{ $course->subject->type }}.</div>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <div class="text-sm text-gray-900">{{ $course->code }}</div>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <button>Órák</button>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <button>Jegyek</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
