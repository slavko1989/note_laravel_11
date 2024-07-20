<x-layout>
    <div clas="note-container single-note">
        <div class="header">

            <h1>Note: {{ $note->created_at }}</h1>

            <div class="note-buttons">
                <a href="{{ route('note.edit',$note) }}" class="note-edit-bitton">Edit</a>
                <form action="{{ route('note.destroy',$note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-button">Delete</button>
                </form>
            </div>

        </div>

        <div class="note">
            <div class="note-body">
                {{ $note->note }}
            </div>
        </div>




    </div>
</x-layout>

