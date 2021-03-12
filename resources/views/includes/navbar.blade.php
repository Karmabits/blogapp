<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="{{url('/')}}">{{config('app.name', 'BlogApp')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
        @guest
          <!-- Some kind of link on the left to display to non logged in users -->
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Visi blog'o įrašai</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Visi blog'o įrašai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/posts')}}">Mano blog'o įrašai</a>
          </li>
        
        @endguest
      </ul>
      
        
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              
              <a class="btn btn-primary btn-lg mr-2" href="{{url('/login')}}">Prisijungti</a>
              <a class="btn btn-primary btn-lg mr-2" href="{{url('/register')}}">Registruotis</a>

          @else
          <a class="btn btn-primary btn-lg mr-2" href="{{url('/posts/create')}}">Sukurti įrašą</a>
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
      
    </div>
  </nav>