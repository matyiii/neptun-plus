<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl mb-4 font-bold">Órarend</h1>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-gray-700 uppercase">Időpont</th>
                                    <th class="px-6 py-3 text-gray-700 uppercase">Tárgy neve</th>
                                    <th class="px-6 py-3 text-gray-700 uppercase">Kurzus kódja</th>
                                    <th class="px-6 py-3 text-gray-700 uppercase">Tárgy típusa</th>
                                    @if ($user->role_id === 2)
                                        <th class="px-6 py-3 text-gray-700 uppercase">Megjelent</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sortedClasses as $class)
                                    <tr>
                                        <td class="px-6 py-4 text-center">
                                            <div class="text-sm text-gray-900">{{ $class->class_date }}</div>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <div class="text-sm text-gray-900">{{ $class->subject->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <div class="text-sm text-gray-900">{{ $class->subject->code }}</div>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <div class="text-sm text-gray-900">{{ $class->subject->type }}</div>
                                        </td>
                                        @if ($user->role_id === 2)
                                            <td class="px-6 py-4 text-center">
                                                {{ $class->attendance->present === 1 ? 'Igen' : 'Nem' }}
                                            </td>
                                        @endif
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
