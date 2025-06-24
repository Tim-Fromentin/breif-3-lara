<x-layout>
    @if (Auth::check())

            <h1>{{$note['title'] ?? ''}}</h1>
        <p>{{$note['note'] ?? ''}}</p>
    @else
        <h1>Non connectez</h1>
    @endif


</x-layout>

