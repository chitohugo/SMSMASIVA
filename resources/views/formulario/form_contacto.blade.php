<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="material-icons">textsms</i>&nbsp;Agregar Contactos</div>
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
                    <form action=""></form>
                      {!!Form::open(array('url'=> 'agregar/store','method'=>'post','class'=>'form-horizontal')) !!}
                       <div class="form-group">
                            
                          <div class="col-md-6 col-md-offset-3">                              
                            <input type="text" class="form-control floating-label" name="numero" id="numero" placeholder="Número" maxlength="11">
                          </div>
                       </div>

                       <div class="form-group">
                            
                          <div class="col-md-6 col-md-offset-3">
                             <select class="form-control" name="municipio" id="municipio">
                                  <option value="" selected disabled></option>  
                                     @foreach($mun as $municipio)                   
                                        <option value="{{ $municipio->id_municipio}}">{{ $municipio->municipio}}</option>
                                     @endforeach
                              </select>
                          </div>
                       </div>

                       <div class="form-group">
                          
                          <div class="col-md-6 col-md-offset-3">
                              <select class="form-control" name="cargo" id="cargo">
                                  <option value="" selected disabled></option>  
                                     @foreach($car as $cargos)                   
                                        <option value="{{ $cargos->id_cargo}}">{{ $cargos->cargo}}</option>
                                     @endforeach
                              </select>
                          </div>
                       </div> 

                      <div class="col-xs-12">
                        <hr/>    
                      </div>
                    <div class="form-group">
                         
                      <div class="col-md-6 col-md-offset-4">  
                                      
                        {!! Form::button('&nbsp;GUARDAR',['type'=>'submit','class'=> 'btn btn-raised btn-success']) !!}

                      </div>     

                    </div>
                     
                                      
                  </div>
                       {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
