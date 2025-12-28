<x-layout title="{{ $note->title }}">
    <div class="max-w-3xl mx-auto">

        <div class="mb-6">
            <a href="{{ route('notes.index') }}" class="btn btn-ghost gap-2 pl-0 hover:bg-transparent hover:text-primary">
                <x-lucide-arrow-left class="size-5" />
                Kembali ke Daftar
            </a>
        </div>

        <article class="bg-base-100 shadow-xl rounded-2xl border border-base-200 overflow-hidden">

            <div class="bg-base-200/50 p-8 border-b border-base-200">
                <h1 class="text-3xl md:text-4xl font-extrabold text-base-content mb-3">
                    {{ $note->title }}
                </h1>

                <div class="flex items-center gap-2 text-sm text-base-content/60">
                    <x-lucide-calendar class="size-4" />
                    <span class="font-medium">
                       Dibuat {{ $note->created_at->format('d M Y, H:i') }}
                       ({{ $note->created_at->diffForHumans() }})
                    </span>
                </div>
            </div>

            <div class="p-8">
                <p class="text-lg leading-relaxed whitespace-pre-wrap text-base-content/80 font-serif">{{ $note->note }}</p>
            </div>

            <div class="bg-base-200/30 p-6 flex justify-end gap-3 border-t border-base-200">

                <a href="{{ route('notes.edit', $note) }}" class="btn btn-warning btn-outline gap-2">
                    <x-lucide-pencil class="size-4" />
                    Edit
                </a>

                <form action="{{ route('notes.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-error text-white gap-2"
                        onclick="return confirm('Hapus note ini secara permanen?')">
                        <x-lucide-trash-2 class="size-4" />
                        Hapus
                    </button>
                </form>

            </div>

        </article>
    </div>
</x-layout>
