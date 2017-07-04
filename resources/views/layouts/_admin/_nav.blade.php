<nav>
            <div class="nav-wrapper purple">
            <div class="container">
              <a href="{{ route('admin.principal') }}" class="brand-logo"><i class="material-icons">business </i></a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('admin.principal') }}">Inicio</a></li>
                <li><a href="{{ route ('admin.usuarios')}}">Lista de Usuarios</a></li>
                
                @if(Auth::guest())
                <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                <li><a href="#">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ route('admin.login.sair') }}"><i class=" material-icons">power_settings_new </i></a></li>
                @endif

                
              </ul>
              <ul class="side-nav" id="mobile-demo">
                <li><a href="{{ route('admin.principal') }}">Inicio</a></li>
                <li><a href="{{ route ('admin.usuarios')}}">Lista de Usuarios</a></li>
                @if(Auth::guest())
                <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                <li><a href="#">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ route('admin.login.sair') }}"><i class=" material-icons">power_settings_new </i></a></li>
                @endif
              </ul>
            </div>
            </div>
  </nav>