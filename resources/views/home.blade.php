@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de Control</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Clientes</h5>
                                        <p class="card-text">Alta/Baja/Modificación de Clientes.</p>
                                        <a href="{{route('clients.index')}}" class="btn btn-primary">Ir a Clientes</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Productos</h5>
                                        <p class="card-text">Alta/Baja/Modificación de Productos.</p>
                                        <a href="{{route('products.index')}}" class="btn btn-primary">Ir a Productos</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Albaranes</h5>
                                        <p class="card-text">Alta/Baja/Modificación de Albaranes.</p>
                                        <a href="{{route('notes.index')}}" class="btn btn-primary">Ir a Albaranes</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Facturas</h5>
                                        <p class="card-text">Alta/Baja/Modificación de Facturas.</p>
                                        <a href="{{route('invoice.index')}}" class="btn btn-primary">Ir a Facturas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
