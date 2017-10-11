
<!-- Modal -->
<div class="modal fade" id="modalregister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!--<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>-->
      <div class="modal-body" style="background-image: url('https://cdn.gearpatrol.com/wp-content/uploads/2016/02/Firewatch-Gear-Patrol-Lead-Full.jpg');">
        <div class="container">
    <div class="row">
        <div class="col-md-6 hidden-md-down">
            <img src="images/welcome/logos/assesorytime2.jpg" class="rounded-circle" width="150px" height="150px" style="margin-left: 95px">
            <br>
            <br>
            <p class="text-black text-center" style="font-size: 20px">Registra tus datos en AssesoryTime</p>
            <br>
            <br>
            <p class="text-white text-center">¿Ya tienes cuenta?</p>
            <a class="btn btn-success col-md-4 offset-md-4" href="" data-toggle="modal" data-target="#modallogin" data-dismiss="modal" role="button">Inicia sesión</a>
        </div>
        <div class="col-lg-6 col-sm-12">         
            <div class="row">

  <div class="col-sm-12">
    <div class="card">
      <div class="card-block">
        <p class="card-text">     

        
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>   
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">@</div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required>
                            </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 col-4 col-lg-4 col-sm-4 offset-md-4 offset-sm-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrate
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
       
        </p>
    </div>
</div>
</div>
        </div>
    
         </div>
    </div>
</div>
    
    </div>
  </div>
</div>
</div>