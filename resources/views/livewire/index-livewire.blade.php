<x-index-layout>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3">
            @foreach ($traje as $traje)
                @livewire(Traje::class,['traje'=>$traje])
            @endforeach
        </div>
    </div>
</x-index-layout>
