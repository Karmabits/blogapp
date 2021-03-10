@extends('layouts.app')
@section('content')
    
    <div class="card text-center">
        <div class="card-header">
            <h1>{{$post->title}}</h1>
        </div>
        <div class="card-body">
          <p class="card-text">{{$post->body}}</p>
          <a href="{{url('/')}}" class="btn btn-primary">Grįžti atgal</a>
        </div>
        <div class="card-footer text-muted">
            <small>Parašytas {{$post->created_at}}, autorius</small>
        </div>
    </div>
@endsection