<nav class="navbar is-transparent">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
      </a>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="/">
          Home
        </a>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="field is-grouped">
            @if(Auth::user())
            <p class="control">
                <span>
                    <a class="button is-light is-info">{{Auth::user()->name}}</a>
                </span>
            </p>
            <p class="control">
                <span>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                    <button class="button is-danger mr-1">
                        <span class="icon">
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
                        <span>
                          Logout
                        </span>
                    </button>
                    </form>
                </span>
            </p>
            @else
            <p class="control">
                <span>
                    <a class="button is-info" href="{{route('login')}}">
                        <span class="icon">
                            <i class="fas fa-sign-in-alt"></i>
                        </span>
                        <span>
                          Login
                        </span>
                      </a>
                </span>
            </p>
            @endif

            <p class="control">
              <a class="button is-dark" target="_blank" href="https://github.com/franbarreneche/Aplicaciones2_P1">
                <span class="icon">
                  <i class="fab fa-github"></i>
                </span>
                <span>
                  Github
                </span>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </nav>
