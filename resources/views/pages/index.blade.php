@extends('layouts.app')
@section('content')
    <h1>Sveiki atvykę į blog'ą</h1>
    <p>Čia matysite visus atministratoriaus paskelbtus įrašus</p>
    @if (count($posts)>0)
    <ul class="list-group">
        @foreach($posts as $post)
        <li class="list-group-item">{{$post}}</li>
        @endforeach
    </ul>
    @endif
@endsection
        

