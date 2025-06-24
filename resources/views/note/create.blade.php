<x-layout>
    <style>
        form {
            display: flex;
            flex-direction: column;
        }
    </style>
    <h1>Création d'une note</h1>
    <form action="{{route('note.store')}}" method="POST">
        @csrf
        <label for="title">Titre</label>
        <input type="text" name="title" id="title">

        <label for="note">Note</label>
        <textarea name="note" id="note" cols="30" rows="10"></textarea>

        <button type="submit">Créé</button>
    </form>
</x-layout>
