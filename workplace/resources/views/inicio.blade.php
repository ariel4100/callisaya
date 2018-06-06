@section('title','Inicio')
@extends('partials.template')
@section('content')
<div class="container my-5 py-5 text-center">
    <div class="row">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p><b>PRESIONE CLICK</b></p>
            <a href="/usuario" class="btn btn-primary btn-lg">Entrar</a>
        </div>
    </div>
</div>
@stop
