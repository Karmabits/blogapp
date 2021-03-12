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
            <small>Parašytas <b>{{$post->created_at}}</b>, autorius <b>{{$post->user->name}}</b></small>
        </div>
    </div>
    @auth
    @if (Auth::user()->id===$post->user_id)
        <a href="{{url('/posts/'.$post->id.'/edit')}}" class="btn btn-secondary btn-md mt-2 float-left"><i class="fas fa-edit"></i> Redaguoti</a>
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'Post', 'class'=>'float-left mt-2 ml-2']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::button('<i class="fas fa-trash"></i> Ištrinti', ['type' => 'submit','class'=>'btn btn-danger btn-md', 'onclick'=>"return confirm('Ar tikrai norite ištrinti šį įrašą?')"])}}
        {!! Form::close() !!}
    @endif
        
    @endauth
    
@endsection