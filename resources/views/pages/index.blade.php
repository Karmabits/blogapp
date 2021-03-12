@extends('layouts.app')
@section('content')
    <h1>Sveiki atvykę į blog'ą</h1>
    <h5>Čia matysite visų narių paskelbtus aktyvius įrašus</h5>
    @if (count($posts)>0)
    <div class="row">
        @foreach($posts as $post)
            <div class="col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text">{{ \Illuminate\Support\Str::limit($post->body, 100, $end='...') }}</p>
                  
                </div>
                <div class="card-footer"><small>Parašytas {{$post->created_at}}</small></div>
                  <a href="./posts/{{$post->id}}" class="btn btn-secondary">Skaityti plačiau</a>
              </div>
            </div>
        @endforeach
        
    </div>
    <div class="pagination justify-content-center">
        {{$posts->links()}}
    </div>
    
    @else
        <h5>Šiuo metu nėra nei vieno aktyvaus blog'o įrašo.</h5>
    @endif
    
@endsection
        

