@extends('layouts.app')
@section('content')
    
    <h1>Kuriamas naujas blog'o įrašas</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method'=>'Post']) !!}
        <div class="form-group">
            {{Form::label('title', 'Pavadinimas', ['class'=>'h5'])}}
            {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Maksimaliai 255 simboliai'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Įrašo turinys', ['class'=>'h5'])}}
            {{Form::textarea('body', '', ['class'=>'form-control', 'placeholder'=>'Maksimaliai 500 simboliai'])}}
        </div>
        {{Form::button('<i class="fas fa-paper-plane"></i> Skelbti', ['type' => 'submit','class'=>'btn btn-primary btn-lg'])}}
        
    {!! Form::close() !!}
@endsection