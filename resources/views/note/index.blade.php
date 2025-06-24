<x-layout>
    <style>
        .box {
            display: flex;
            flex-direction: column;
            gap: 15px;
            align-items: center;
            width: 500px;
            border: 1px solid #333;
            padding: 25px;
            margin-top: 50px;
        }
        hr {
            width: 100%;
            background: #000;
        }
        nav {
            padding-bottom: 50px;
        }
    </style>
    @if (Auth::check())
        @foreach($notes as $note)
            <div class="box">


            <h1>{{$note['title']}}</h1>
                <hr>
            <a href="/note/{{$note['id']}}">Détails</a>
                <hr>
                <a href="edit/{{$note['id']}}">Modifier</a>
                <hr>
            <form action="{{route('note.destroy', $note->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>


            </div>
        @endforeach
    @endif
</x-layout>

