<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl mb-4 font-bold">Igazolás feltöltése</h1>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <form action="{{ route('certificate.upload.pdf') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="certificate">
                                <button type="submit">Feltöltés</button>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>