<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="material-icons">textsms</i>&nbsp;Enviar Mensajes</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-8">
                            @if (Session::has('message')) 
                                <div class="alert alert-success alert-dismissible" id="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                     <strong>{{Session::get('message')}}</strong> 
                                </div>
                            @endif 
                                  
                            @if (count($errors) > 0)                            
                                <div class="alert alert-danger alert-dismissible" id="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>                     
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                     </div>
                   <div class="row">
                       {!!Form::open(['route'=> 'enviar.store','method'=>'post']) !!}  
                          <div class="col-xs-4">
                               <select class="form-control" name="mun" id="mun" >
                                    <option value="" >...</option>
                                    @foreach($mun as $municipio)
                                        <option  value="{{ $municipio->id_municipio}}">{{ $municipio->municipio}}</option>
                                    @endforeach
                                </select>
                          </div>
                          <div class="col-xs-4">
                              <select class="form-control" name="carg" id="carg">
                              </select>
                          </div>
                          <div class="col-xs-4">
                                
                              <select class="form-control" name="multiselect[]" id="multiple" multiple="multiple">

                               </select>                           

                          </div>
                          <div class="col-xs-4">  
                          
                            {!! Form::hidden('estado', '1')!!}                    
               
                          </div>
                     
                          <div class="col-xs-12">
                              <hr/>    
                          </div>
                          <div class="col-xs-8">  
                             <div class="pull-right">
                              <input class="form-control" type="text" name=caracteres size=2></input> 

                             </div>
                          </div> 

                            <div class="col-xs-8">
                              {!! Form::textarea('mensaje',null,['class'=>'form-control', 'rows'=>"5", 'onKeyDown'=>"valida_longitud()", 'onKeyUp'=>"valida_longitud()", 
                              'placeholder'=>'Escriba aqui su mensaje']) !!}  
                            </div>

                            <div class="col-xs-12">
                                <hr/>    
                             </div>

                         
                            <div class="col-xs-8">  
                                <div class="pull-right">                
                                    {!! Form::button('&nbsp;ENVIAR',['type'=>'submit','class'=> 'btn btn-raised btn-success','onclick'=>"capturar()"]) !!}

                                </div>
                            </div> 

                            <div class="col-xs-12">
                                <hr/>    
                            </div>

                            <div class="col-xs-4">
                              <ul class="list-group">
                                <li class="list-group-item">
                                  <span class="badge">14</span>
                                  <i class="fa fa-envelope"></i>&nbsp;<b>SMS/Enviados</b>
                                </li>                                 
                              </ul>
                               <ul class="list-group">
                                <li class="list-group-item">
                                  <span class="badge">14</span>
                                  <i class="fa fa-envelope-o fa-spin"></i>&nbsp;
                                  <b>SMS/Enviar</b>
                                </li>                                 
                              </ul>
                                
                                
                            </div>               
                     
                                      
                    </div>
                         {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

