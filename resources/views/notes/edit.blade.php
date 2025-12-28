<x-layout title="Edit">
    <div class="w-2xl mx-auto">
        <form action="{{ route('notes.update', $note) }}" method="POST">
            @csrf
            @method('PUT')

            <fieldset class="fieldset">
                <legend class="fieldset-legend text-xl">Title</legend>
                <input type="text" name="title" class="input w-full @error('title')
                input-error
                @enderror" value="{{ old('title', $note->title) }}">
                @error('title')
                <span class="text-error"> {{ $message }} </span>
                @enderror
            </fieldset>

            <fieldset class="fieldset">
                <legend class="fieldset-legend text-xl">Note</legend>
                <textarea name="note" class="textarea w-full @error('note')
                textarea-error
                @enderror" rows="20">{{ old('note', $note->note) }}</textarea>
                @error('note')
                <span class="text-error"> {{ $message }} </span>
                @enderror
            </fieldset>

            <div class="flex justify-between mt-6">
                <a class="btn btn-outline" href="{{ route('notes.index') }}">Cancel</a>
                <button class="btn btn-primary" type="submit" onclick="return confirm('Yakin untuk mengupdate note?')">Update</button>
            </div>
        </form>
    </div>
</x-layout>
