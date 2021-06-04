@extends('layouts.app')



    <!-- NAVBAR -->
    @section('content')
        <div class="container" style="padding-top:5vh">
            <div class="row">
                <div class="col-3">
                    @include('Components/sidebar')
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
                                            <th>Nombre</th>
                                            <th>Cédula</th>
                                            <th># Celular</th>
                                            <th>Fecha</th>
                                            <th>Ciudad</th>
                                            <th>Email</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        
                                        <tbody>
                                        @foreach($user as $user)
                                    <tr>

                                        <td>{{$loop->iteration}}</td>
                                        
                                        <td>{{$user->user_name}}</td>
                                        <td>{{$user->user_ci}}</td>
                                        <td>{{$user->user_cellphone}}</td>
                                        <td>
                                            
                                            {{ \Carbon\Carbon::parse($user->user_date)->age }}

                                        </td>
                                        <td>{{$user->city_description}}</td>
                                        <td>{{$user->email}}</td>

                                      
                                        <td>

                                        

                                            <a href="{{url('/edit-users/'.$user->id.'/edit')}}">
                                                <button type="button" class="btn btn-secondary btn-outline-secondary btn-md" style="width:50px"> <i class="fas fa-user-edit"></i></button>
                                            </a>

                                            <form method="post" action="{{url('/delete-users/'.$user->id)}}">
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
        
        