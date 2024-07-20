<x-layout>
    <div clas="note-container single-note">
        <h1>Note: </h1>
        <form action="{{ route('note.store') }}" method="POST" class="note">
            @csrf
            <textarea name="note" id="" cols="30" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-bitton">Cancel</a>
                <button class="note-submit-button">Submmit</button>
            </div>
        </form>
    </div>
</x-layout>
