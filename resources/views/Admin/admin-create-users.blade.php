@extends('layouts.app')

    <!-- NAVBAR -->
    @section('content')
        <div class="container" style="padding-top:5vh">
            <div class="row">
                <div class="col-3">
                    @include('Components/sidebar')
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">
                            <p>Crear un Usuario</p>
                        </div>
                            
                        <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                @if(Session::has('Message2')){{
                                    Session::get('Message2')
                                }}@endif
                            </div>
                            <form method="POST" action="{{ route('add-users') }}"  >
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" class="form-control"  name="user_name" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                    <div class="mb-3">
                                            <label class="form-label">Cédula</label>
                                            <input type="text" class="form-control"  name="user_ci" required maxlength="11">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Número de Celular</label>
                                            <input type="text" class="form-control"  name="user_cellphone" maxlength="10">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                    <div class="mb-3">
                                            <label class="form-label">Fecha de Nacimiento</label>
                                            <input type="date" class="form-control"  name="user_date" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">País</label>
                                            <select class="form-control" name="user_country" id="select-country" aria-label="Default select example">
                                                <option selected>Seleccione un País</option>
                                                @foreach($countries as $countries){
                                                    <option value="{{$countries->country_id}}">{{$countries->country_description}}</option>
                                                }
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Estado</label>
                                            <select class="form-control" name="user_state" id="select-state" aria-label="Default select example">
                                               
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Ciudad</label>
                                            <select class="form-control" name="user_city" id="select-city" aria-label="Default select example">
                                               
                                            </select>
                                        </div>
                                    </div>
                                </div>

                               

                                <div class="row">                                   
                                    <div class="col-6">
                                    
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label" id="pasword">Contraseña</label>
                                            <input type="password" class="form-control" name="password" id="password">
                                            <div id="emailHelp" class="form-text">{{$errors}}</div>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label" >Confirmar Contraseña</label>
                                            <input type="password" class="form-control" name="password_confirmation" id="password-confirm">
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="user_rol" value="2">


                                
                                <button type="submit" class="btn btn-primary">Crear Usuario</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div>


        <script src="js/states.js">
        
      
       
        </script>
    @endsection
        
@include('Components/footer')
        
        