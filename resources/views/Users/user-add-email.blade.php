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
                            <p>Registrar Email</p>
                        </div>
                            
                        <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                @if(Session::has('Message2')){{
                                    Session::get('Message2')
                                }}@endif
                            </div>
                            <form method="POST" action="{{ route('add-email') }}"  >
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Asunto</label>
                                            <input type="text" class="form-control"  name="email_subject" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                    <div class="mb-3">
                                            <label class="form-label">Destinatario</label>
                                            <input type="text" class="form-control"  name="email_to" required maxlength="11">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Mensaje</label>
                                                <textarea class="form-control" name="email_message" id="exampleFormControlTextarea1" rows="4"></textarea>
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
        
        