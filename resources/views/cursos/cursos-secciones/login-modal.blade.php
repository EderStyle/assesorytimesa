<!-- Modal -->
<div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
    <div class="row">
        <div class="col-md-12">

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Accede
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
<hr>
    <p class="text-center">O accede a través de:</p>
        <div class="container hidden-sm-down">
            <div class="row">
                <div class="col-md-4 text-left"><a href="{{route('social.auth','facebook')}}" class="btn btn-primary"><i class="fa fa-facebook-square"></i> Facebook</a></div>
                <div class="col-md-4 text-center"><a href="" class="btn btn-warning"><i class="fa fa-twitter-square"></i> Office 365</a></div>
                <div class="col-md-4 text-right"><a href="{{route('social.auth','google')}}" class="btn btn-danger"><i class="fa fa-google-plus-square"></i> Google</a></div>
            </div>
        </div>
        <!--MOSTRAR EN PEQUEÑO Y MENORES-->
        <div class="container hidden-md-up">
            <div class="row">
                <div class="col-sm-2 col-12 offset-md-3 offset-sm-3 offset-xs-5 text-center"><a href="{{route('social.auth','facebook')}}" class="btn btn-primary"><i class="fa fa-facebook-square fa-2x"></i></a></div>
                <div class="col-sm-2 col-12 offset-xs-5 text-center"><a href="" class="btn btn-warning"><i class="fa fa-twitter-square fa-2x"></i></a></div>
                <div class="col-sm-2 col-12 offset-xs-5 text-center"><a href="{{route('social.auth','google')}}" class="btn btn-danger"><i class="fa fa-google-plus-square fa-2x"></i></a></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar ventana</button>
      </div>
    </div>
  </div>
</div>