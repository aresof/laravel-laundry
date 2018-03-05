@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if(session('status'))
                    <div class="alert alert-success" role="alert">{{session('status')}}</div>
                @endif
                <div class="card">
                    <div class="card-block">
                        <div class="text-center">Lista de Clientes</div>
                        <h6 class="card-subtitle mb-2 text-muted">En total hay {{ $clients->total() }} clientes,
                            estás en la página {{$clients->currentPage()}} de {{ $clients->lastPage() }}</h6>
                        <p class="card-text">

                        @component('clients._table', ["clients" =>$clients ])

                        @endcomponent

                        <div class="text-center">{{$clients->links()}}</div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection()