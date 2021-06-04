@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
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









                        <!-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/states.js">
        
      
       
        </script>
@endsection
