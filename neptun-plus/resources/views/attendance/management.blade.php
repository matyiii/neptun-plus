<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl mb-4 font-bold">Tanórák</h1>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-gray-700 uppercase text-left">Tárgy neve</th>
                                    <th class="px-6 py-3 text-gray-700 uppercase text-left">Tárgy kódja</th>
                                    <th class="px-6 py-3 text-gray-700 uppercase text-left">Kurzus kódja</th>
                                    <th class="px-6 py-3 text-gray-700 uppercase text-left">Dátum</th>
                                    <th class="px-6 py-3 text-gray-700 uppercase text-left">Hallgatók száma</th>
                                    <th class="px-6 py-3 text-gray-700 uppercase text-left">Jelenlét rögzítés</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    @foreach ($course->classes as $class)
                                        <tr>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">{{ $course->subject->name }} -
                                                    {{ $course->subject->type }}.</div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">{{ $course->subject->code }}</div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">{{ $course->code }}</div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">{{ $class->class_date }}</div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    {{ $course->users->where('role_id', 2)->count() }}</div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <button
                                                    onclick="window.location='{{ route('attendance.form', ['class_id' => $class->id]) }}'">
                                                    Jelenlét rögzítés
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
