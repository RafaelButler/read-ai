<x-app-layout>
    <div class="my-8">
        <div
            class="grid md:grid-cols-[1fr_250px] lg:grid-cols-3 items-start flex-1 gap-4 p-4 sm:px-6 sm:py-0 md:gap-8 ">
            <div class="lg:col-span-2">
                <livewire:create-reading/>
            </div>

            <div class="card mb-4">
                <div class="card-title p-4 border-b border-gray-300">
                    <h2 class="text-lg text-gray-900 dark:text-gray-400 font-bold">Anotações</h2>
                    <p>
                        <span class="text-gray-600"></span>
                    </p>
                </div>

                <div class="card-body flex flex-col gap-3 py-4 text-gray-600 ">
                    <livewire:notes/>
                </div>
                <div class="border-separate pb-4"></div>
                <div class="card-footer pt-4 border-t border-gray-300">
                    <livewire:tags/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
