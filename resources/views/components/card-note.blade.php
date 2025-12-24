@props(['note'])

<div class="card w-full bg-base-200/30 shadow hover:shadow-lg">
    <div class="card-body">
        <h2 class="card-title hover:text-secondary transition-colors duration-100"><a href="" class="truncate"> {{ $note->title }} </a></h2>
        <p class="line-clamp-2">
            {{ $note->note }}
        </p>
        <div class=" card-actions justify-between">
            <div>
                <p class="text-xs text-base-content/50"> {{ $note->updated_at->diffForHumans() }} </p>
            </div>
            <div class="flex gap-2">
                <a href="" class="btn btn-info btn-xs rounded-full">
                    <x-lucide-pencil class="size-3" />
                </a>
                <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline btn-error rounded-full btn-xs"
                        onclick="return confirm('Yakin hapus?')">
                        <x-lucide-trash class="size-3" />
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
