@extends('layouts.auth')

@section('content')
<div class="login-page">
    <div class="login-main">    
         <div class="login-head">
                <h1>Authentification</h1>
            </div>
            <div class="login-block">
            <form method="post" action="{{ url('/login') }}">
                 {!! csrf_field() !!}
                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="text" name="email" placeholder="Email" required="true" value="{{ old('email') }}" class="form-control">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
    
                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Mot de passe" name="password" class="lock">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif

                </div>
                    <div class="forgot-top-grids">
                        <div class="forgot-grid">
                            <ul>
                                <li>
                                    <input type="checkbox" id="brand1" value="">
                                    <label for="brand1"><span></span>Garder ma session ouverte </label>
                                </li>
                            </ul>
                        </div>
                        <div class="forgot">
                            <a href="{{ url('/password/reset') }}">Mot de passe oublié?</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <input type="submit" name="Sign In" value="Connectez-vous à votre compte">  
               
            </form>
                <h5><a href="{{ url('/') }}">Retournez à la page d'accueil</a></h5>
            </div>
      </div>
</div>
@endsection