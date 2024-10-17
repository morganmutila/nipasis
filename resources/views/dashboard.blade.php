<x-app-layout>

    <div class="grid grid-cols-1 gap-4 mt-6 mb-6">
        <h1 class="text-2xl font-bold">Welcome {{ auth()->user()->name }}</h1>
    </div>

    <div class="grid grid-cols-1 gap-4 mt-6 mb-12">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                You are logged in
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
        <div
            class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 w-32 md:h-[14rem] md:w-[14rem]">
        </div>
        <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 w-32 md:h-[14rem] md:w-[14rem]">
        </div>
        <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 w-32 md:h-[14rem] md:w-[14rem]">
        </div>
        <div
            class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 w-32 md:h-[14rem] md:w-[14rem]">
        </div>
    </div>

</x-app-layout>
