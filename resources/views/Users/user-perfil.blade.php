@extends('layouts.app')

    <!-- NAVBAR -->
    @section('content')
        <div class="container" style="padding-top:5vh">
            <div class="row">
                <div class="col-3">
                    @include('Components/user-sidebar')
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">
                            <p>Mi Perfil</p>
                        </div>
                            
                        <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                @if(Session::has('Message2')){{
                                    Session::get('Message2')
                                }}@endif
                            </div>
                            <form   >
                                @csrf
                            <!-- {{csrf_field()}}Seguridad -->
                        <!-- {{method_field('PATCH')}} -->

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" class="form-control"  name="user_name" value="{{ Auth::user()->user_name}}" disabled>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                    <div class="mb-3">
                                            <label class="form-label">Cédula</label>
                                            <input type="text" class="form-control"   value="{{Auth::user()->user_ci}}" disabled>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Número de Celular</label>
                                            <input type="text" class="form-control"  name="user_cellphone" value="{{Auth::user()->user_cellphone}}" maxlength="10">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                    <div class="mb-3">
                                            <label class="form-label">Fecha de Nacimiento</label>
                                            <input type="date" class="form-control"  name="user_date" value="{{Auth::user()->user_date}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control"  value="{{Auth::user()->email}}" disabled>

                                        </div>
                                    </div>

                                    

                                    <!-- <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Ciudad</label>
                                            <select class="form-control" name="user_city" id="select-city" aria-label="Default select example">
                                               
                                            </select>
                                        </div>
                                    </div> -->
                                </div>

                               

                                

                                
                                <button type="submit" class="btn btn-primary">Actualizar Información</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

        <script type="text/javascript" src="/jquery-3.6.0.min.js"></script>

        <script src="../../js/states_edit.js">
        


        </script>
    @endsection
        
@include('Components/footer')
        
        