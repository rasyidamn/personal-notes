<div >
    <button class="btn btn-primary" onclick="my_modal_3.showModal()">+ Tambah Catatan</button>
    <dialog id="my_modal_3" class="modal">
        <div class="modal-box">
            <form method="dialog">
                @csrf
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold mb-4">Tambah Note</h3>
            <form action="{{ route('notes.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <input type="text" name="title" placeholder="Title" value="{{ old('title') }}" class="input w-full
                    @error('title')
                    input-error
                    @enderror" required>

                    @error('title')
                    <div class="ml-1">
                        <span class="text-xs text-error"> {{ $message }} </span>
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <textarea name="note" placeholder="Note" value="{{ old('note') }}" class="textarea w-full
                    @error('note')
                    textarea-error
                    @enderror" rows="10" required></textarea>

                    @error('note')
                    <div class="ml-1">
                        <span class="text-xs text-error"> {{ $message }} </span>
                    </div>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button class="btn btn-primary" type="submit">
                        submit
                    </button>
                </div>



            </form>
        </div>
    </dialog>
</div>
