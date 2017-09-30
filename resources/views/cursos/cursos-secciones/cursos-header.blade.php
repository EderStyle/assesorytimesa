<nav class="navbar navbar-light bg-faded navbar-inverse" style="background-color: #2E2E2E">
  <form class="form-inline my-2 my-lg-0">
      <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2">
        <a class="navbar-brand" href="#">
            <img src="images/welcome/logos/assesorytime.jpg" width="30" height="30" alt="">
            AssesoryTime Cursos
        </a>
      </div>
      @guest
      <div class="navbar-item col-md-8 col-sm-8 col-xl-8 col-lg-8 offset-md-2 offset-sm-2 offset-lg-2 offset-xs-2 text-right">
        <a class="btn btn-primary my-2 my-sm-0 mr-sm-2" href="" data-toggle="modal" data-target="#modallogin" role="button">Iniciar sesión</a>
        <a class="btn btn-success my-2 my-sm-0" href="" data-toggle="modal" data-target="#modalregister" role="button">Registrarse</a>
      </div>
      
      @else
      <div class="navbar-item col-md-1 col-sm-1 col-lg-1 col-1 offset-md-9 offset-sm-9 offset-lg-9 offset-xs-9">

        <li class="nav-item dropdown">
                    <a class="" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{ Auth::user()->avatar }}" style="width: 40px; height: 40px;" class="rounded-circle" />
                    </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Perfil</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                        <i class="fa fa-times"></i>   
                        Cerrar sesión
                    </a>
              </div>
      </li>                          
      </div>
      @endguest
  </form>
</nav>

@include('cursos.cursos-secciones.login-modal')
@include('cursos.cursos-secciones.register-modal')