@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Hola, acá podes agregar Cliente y Productos') }}
                    <div class="alert alert-success" style="margin-top: 5px">
                        <p>
                            En la parte de Clientes, se pueden agregar ciudades y departamentos, primero agregar los departamentos!
                        </p>
                    </div>
                    <div class="alert alert-success">
                        <p>
                            En la parte de Productos, se pueden agregar productos y categorias, primero agregar las categorias!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
