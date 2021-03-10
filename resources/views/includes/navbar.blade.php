<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="{{url('/')}}">{{config('app.name', 'BlogApp')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="btn btn-primary btn-lg mr-2" href="{{url('/posts/create')}}">Sukurti įrašą</a>
        <a class="btn btn-primary btn-lg mr-2" href="{{url('/login')}}">Prisijungti</a>
      </div>
    </div>
  </nav>