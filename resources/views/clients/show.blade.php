@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if(session('status'))
                <div class="alert alert-success" role="alert">{{session('status')}}</div>
             @endif
        HOLA {{$clients->name}}
        </div>
    </div>
@endsection