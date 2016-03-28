<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    

    <title>MensajeriaMasiva</title> 

    
    {!!Html::style('bower_components/bootstrap/dist/css/bootstrap.css')!!}   
    {!!Html::style('bower_components/font-awesome/css/font-awesome.min.css')!!}
    {!!Html::style('bower_components/bootstrap-material-design/dist/css/roboto.min.css')!!}
    {!!Html::style('bower_components/bootstrap-material-design/dist/css/material-fullpalette.css')!!}
    {!!Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css')!!}
    {!!Html::style('bower_components/material-design-icons/iconfont/material-icons.css')!!}
    {!!Html::style('bower_components/select2/dist/css/select2.min.css') !!}
    {!!Html::style('bower_components/multiple-select/multiple-select.css') !!} 
   
    
   
    
</head>
    <body>
            
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img alt="CR" src="...">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                @if (Auth::check())
                    <li><a href="{{ url('/home') }}"><i class="material-icons">home</i>&nbsp;Inicio</a></li>                
                    <li><a href="{{ url('/enviar') }}"><i class="material-icons">message</i>&nbsp;Mensajes</a></li>
                     <li><a href="{{ url('/agregar') }}"><i class="material-icons">person_add</i>&nbsp;Contactos</a></li>
                    <!--<li><a href="{{ url('/contactos') }}"> <i class="fa fa-users fa-2x"></i>&nbsp;Contactos</a></li>-->             
                    
                @endif
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><i class="glyphicon glyphicon-log-in"></i>&nbsp;Entrar</a></li>
                        <li><a href="{{ url('/register') }}"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;Registrar</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >{{ Auth::user()->name }} <i class="material-icons">person</i> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-2x"></i>&nbsp;Salir</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

        <div class="container">

        
        
            <div>
                @yield('content')
            </div>
    


            <!-- Scripts -->
            {!! Html::script('bower_components/jquery/dist/jquery.min.js') !!}    
            {!! Html::script('bower_components/bootstrap/dist/js/bootstrap.js') !!} 
            {!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js') !!}
            {!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js') !!}
            {!! Html::script('bower_components/select2/dist/js/select2.min.js') !!}
             {!!Html::script('bower_components/multiple-select/multiple-select.js')!!}
            {!! Html::script('bower_components/jquery/dist/dropdown.js') !!}

        

           
             
        </div>
        <div class="navbar navbar-info navbar-fixed-bottom">
            <div class="container">                
                
                <p class="navbar-text pull-left">
                    Design by Ing. Hugo González
                    <a href="https://github.com/search?utf8=%E2%9C%93&q=%40chitohugo"><i class="fa fa-github"></i></a> /
                    <a href="https://www.linkedin.com/in/hugo-eduardo-gonzalez-9b1001b5?trk=hp-identity-name"><i class="fa fa-linkedin"></i></a>
                   
                   
                    
                </p>
            </div>
            

        </div>


    </body>
</html>
