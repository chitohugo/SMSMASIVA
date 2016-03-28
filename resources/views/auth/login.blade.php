@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><h3 class="panel-title">Inicio de Sesion</h3></div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong></strong><br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            
                            <div class="col-md-6 col-md-offset-3">
                                
                                 <input type="email" class="form-control floating-label" name="email" value="{{ old('email') }}"  placeholder="Email">

                            </div>
                        </div>

                        <div class="form-group">
                            
                            <div class="col-md-6 col-md-offset-3">
                                <input type="password" class="form-control floating-label" name="password"   placeholder="Clave">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recuérdame
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-log-in"></i>&nbsp;Entrar</a></button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Recuperar Contraseña?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
