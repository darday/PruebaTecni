@extends('layouts.app')

@section('content')
        <div class="container" style="padding-top:5vh">
            <div class="row">
                <div class="col-3">
                    @include('Components/user-sidebar')
                </div>
                <div class="col-9">
                    <h1>Bienvenido Al Módulo de Usuario</h1>
                </div>
            </div>
           
        </div>
@endsection
@include('Components/footer')