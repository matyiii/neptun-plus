<style>
    #submit_btn {
        background-color: #3490dc;
    }
</style>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl mb-4 font-bold">Jelenlét rögzítő</h1>
                    <h2 class="mb-4 font-bold">Kiválasztott tárgy: {{ $subject->name }}</h2>
                    <h2 class="mb-4 font-bold">Időpont: {{ $classDate }}</h2>
                    <div class="overflow-x-auto">
                        <form action="{{ route('attendance.submit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="class_id" value="{{ $classId }}">
                            <table class="min-w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">Neptun Code</th>
                                        <th class="px-4 py-2">Email</th>
                                        <th class="px-4 py-2">Jelenlét</th>
                                        <th class="px-4 py-2">Igazolt Hiányzás</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $student->neptun_code }}</td>
                                            <td class="border px-4 py-2">{{ $student->email }}</td>
                                            <td class="border px-4 py-2 text-center">
                                                @php
                                                    $attendance = $student->attendances->firstWhere(
                                                        'class_id',
                                                        $classId,
                                                    );
                                                    $isChecked = $attendance && $attendance->present === 1;
                                                    $isExcuseChecked = $attendance && $attendance->excuse_submitted === 1;
                                                @endphp
                                                <input type="hidden" name="students[{{ $student->id }}]"
                                                    value="0">
                                                <input type="checkbox" name="students[{{ $student->id }}]"
                                                    value="1" {{ $isChecked ? 'checked' : '' }}>
                                            </td>
                                            <td class="border px-4 py-2 text-center">
                                                <input type="hidden" name="justified_absences[{{ $student->id }}]" 
                                                    value="0">
                                                    <input type="checkbox" name="justified_absences[{{ $student->id }}]" 
                                                    value="1" {{ $isExcuseChecked ? 'checked' : '' }}>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="submit" id="submit_btn"
                                class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Rögzítés
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
