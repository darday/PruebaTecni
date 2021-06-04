@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row justify-content-center">
        <div class="container" style="padding-top:5vh">
                <div class="row">
                    <div class="col-3">
                        @include('Components/sidebar')
                    </div>
                    <div class="col-9">
                        <h1>Bienvenido Al Sistema</h1>
                    </div>
                </div>
            
            </div>
        </div>
</div>
@endsection
