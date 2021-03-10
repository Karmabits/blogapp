@extends('layouts.app')
@section('content')
    <h1>Sveiki atvykę į blog'ą</h1>
    <p>Čia matysite visų narių paskelbtus aktyvius įrašus</p>
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
        <p>Šiuo metu nėra nei vieno blog'o įrašo.</p>
    @endif
    
@endsection
        

