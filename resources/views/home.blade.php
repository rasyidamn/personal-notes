<x-layout>
    <div class="flex flex-col flex-1">

        <div class="mb-6">
            <x-tambah-note-modal />
        </div>

        @if ($notes->isEmpty())

        <div class="flex-1 flex items-center justify-center border-2 border-dashed border-gray-300 rounded-lg">
            <div class="text-center flex flex-col justify-center">
                <x-lucide-notebook-pen class="text-gray-500 size-20 self-center"/>
                <p class="text-gray-500">Belum ada note</p>
            </div>
        </div>

        @else

        <div class="grid grid-cols-3 gap-6">
            @foreach ($notes as $note)
            <x-card-note :note="$note" />
            @endforeach
        </div>

        @endif
    </div>
</x-layout>
