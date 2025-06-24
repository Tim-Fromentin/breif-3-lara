<x-layout>
    @if (Auth::check())
        <a href="{{url('note')}}">Voir les notes</a>
    @else
        <h1>Connectez vous pour voir les notes</h1>
    @endif
</x-layout>
