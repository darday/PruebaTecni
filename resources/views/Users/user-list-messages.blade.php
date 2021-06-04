@extends('layouts.app')



    <!-- NAVBAR -->
    @section('content')
        <div class="container" style="padding-top:5vh">
            <div class="row">
                <div class="col-3">
                    @include('Components/user-sidebar')
                </div>
                <div class="col-9">


                <div class="card " >
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">

                            <div class="alert alert-success" role="alert">
                                @if(Session::has('Mensaje')){{
                                    Session::get('Mensaje')
                                }}@endif
                            </div> 
                                <div class="table-responsive">
                                    <table class="table table-bordered " style="font-size: 0.8em;"id="example"  width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Asunto</th>
                                            <th>Destinatario</th>
                                            <th>Mensaje</th>
                                            <th>id_remitente</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                        </thead>
                                        
                                        <tbody>
                                        @foreach($email as $user)
                                    <tr>

                                        <td>{{$loop->iteration}}</td>
                                        
                                        <td>{{$user->email_subject}}</td>
                                        <td>{{$user->email_to}}</td>
                                        <td>{{$user->email_message}}</td>
                                        
                                        <td>{{$user->user_id}}</td>

                                      
                                        <td>

                                        

                                            <a href="">
                                                <button type="button" class="btn btn-secondary btn-outline-secondary btn-md" style="width:50px"> <i class="fas fa-user-edit"></i></button>
                                            </a>

                                            <form method="post" action="">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button type="Submit" class="btn btn-danger btn-outline-danger btn-md" style="width:50px" onclick="return confirm('¿Desea Borrar?');  " > <i class="fas fa-trash-alt"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                  
                </div>
            </div>
           
        </div>


        <script>
     
    $(document).ready( function () {
    $('#example').DataTable({
        "language":{
            "info":"_TOTAL_ Usuarios",
            "search":"Buscar",
            "paginate":{
                "next":"Siguiente",
                "previous":"Anterior",
            },
            "lengthMenu":'Mostrar<select>'+
                            '<option value="10">10</option>'+
                            '<option value="25">25</option>'+
                            '<option value="50">50</option>'+
                            '<option value="-1">Todo</option>'+
                            '</select> Registros',
            "loadingRecords": "Cargando Datos...",
            "processing":     "Procesando...",
            "emptyTable":     "No existen Datos",
            "zeroRecords":    "No se encontraron Coincidencias",
            "infoEmpty":      "",
            "infoFiltered":   "",






        }
    });
} );

</script>

    @endsection
        
@include('Components/footer')
        
        