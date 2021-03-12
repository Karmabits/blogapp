@extends('layouts.app')
@section('content')
    <h1>Sveiki atvykę į savo blog'o įrašų sąrašą</h1>
    <h5>Čia matysite visus savo blog'o įrašus</h5>
    <div class="alert alert-success" role="alert" id='infoMessage' style="display: none">
      
    </div>
    @if (count($posts)>0)
    <div class="row">
        @foreach($posts as $post)
            <div class="col-sm-6 mb-4" id='block{{$post->id}}'>
              <div class="card {{$post->active == 1 ? '' : 'border-danger'}}" id='card{{$post->id}}'>
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text">{{ \Illuminate\Support\Str::limit($post->body, 100, $end='...') }}</p>
                  
                </div>
                <div class="card-footer">
                  <div class="float-left">
                    <small>Parašytas {{$post->created_at}}</small>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="activeCheck{{$post->id}}" onclick="changePostStatus({{$post->id}})" {{$post->active == 1 ? 'checked' : ''}}>
                      <label class="form-check-label" for="activeCheck">Įrašas aktyvus</label>
                    </div>
                  </div>
                  <button class="btn btn-danger btn-md mt-2 float-right" onclick="deletePost({{$post->id}})"> <i class="fas fa-trash"></i> Ištrinti</button>
                </div>
                  <a href="./posts/{{$post->id}}" class="btn btn-secondary">Skaityti plačiau</a>
              </div>
            </div>
            
        @endforeach
        
        
    </div>
    <div class="pagination justify-content-center">
        {{$posts->links()}}
    </div>
    
    @else
        <h5>Šiuo metu nėra nei vieno blog'o įrašo.</h5>
    @endif
    

    <script>
      //function to process post activation/deactivation
      function changePostStatus(id) {
        var infoMessage = document.getElementById("infoMessage");
         $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            url:'/blogapp/public/changepoststatus/'+id,
            data:'_token = <?php echo csrf_token() ?>',
            success:function(data) {
              document.getElementById('card'+id).classList.toggle('border-danger');
              infoMessage.innerHTML=data.message;
            }
         });
         
         //if info message is displayed hide it after 3s
         if (infoMessage.style.display === "none") {
            infoMessage.style.display = "block";
            setTimeout(function(){ infoMessage.style.display = "none"; }, 3000);
         } 
      }

      //function to delete post
      function deletePost(id) {
        var infoMessage = document.getElementById("infoMessage");
         $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            url:'/blogapp/public/deletepost/'+id,
            data:'_token = <?php echo csrf_token() ?>',
            success:function(data) {
              document.getElementById('block'+id).style.display="none";
              infoMessage.innerHTML=data.message;
            }
         });
         
         //if info message is displayed hide it after 3s
         if (infoMessage.style.display === "none") {
            infoMessage.style.display = "block";
            setTimeout(function(){ infoMessage.style.display = "none"; }, 3000);
         } 
      }
   </script>
@endsection
        

