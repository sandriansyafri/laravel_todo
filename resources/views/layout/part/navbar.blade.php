<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
      <div class="container">
        <a class="navbar-brand" href="{{ route('task.index') }}">TODO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            @foreach ($routes as $route => $url)
            <li class="nav-item">
                  <a class="nav-link   text-capitalize" aria-current="page" href="{{ url($url) }}">
                        {{ $route }}
                  </a>
                </li>
            @endforeach
          </ul>
          <ul class="navbar-nav ms-auto">
              @guest
              <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">Login</a>
              </li>
              @endguest
              @auth
              <div class="dropdown">
                <a class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Hello, {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  @can('isAdmin')
                  <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  @endcan
                  <li>
                    <form action="{{ route('logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item" >Logout</button>
                    </form>
                  </li>
                </ul>
              </div>
              @endauth
          </ul>
        </div>
      </div>
    </nav>