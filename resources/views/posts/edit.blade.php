@extends('layouts.app')
@section('content')
    
    <h1>Redaguojamas blog'o įrašas</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'Post']) !!}
        <div class="form-group">
            {{Form::label('title', 'Pavadinimas',['class'=>'h5'])}}
            {{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'Maksimaliai 255 simboliai'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Įrašo turinys',['class'=>'h5'])}}
            {{Form::textarea('body', $post->body, ['class'=>'form-control', 'placeholder'=>'Maksimaliai 500 simboliai'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::button('<i class="fas fa-paper-plane"></i> Atnaujinti', ['type' => 'submit','class'=>'btn btn-primary btn-lg'])}}
        
    {!! Form::close() !!}
@endsection