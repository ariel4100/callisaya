@extends('app.partials.app')

@section('content')
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="text-center">REMITO</h1>
                    <ul class="list-group my-3">
                        <li class="list-group-item"><b>FECHA DE EMISION: </b>{{$remito->fecha_emision}}</li>
                        <li class="list-group-item"><b>MONTO TOTAL: </b>{{$remito->monto_total}}</li>
                        <li class="list-group-item"><b>PROVEEDOR N°: </b>{{$remito->proveedor->id}}</li>
                        <li class="list-group-item"><b>DIRECCION: </b>{{$remito->proveedor->direccion}}</li>
                        <li class="list-group-item"><b>TELEFONO: </b>{{$remito->proveedor->telefono}}</li>
                        <li class="list-group-item"><b>FECHA DE ALTA: </b>{{$remito->proveedor->fecha_alta}}</li>
                    </ul>
                    <div class="text-center">
                    <a class="btn btn-primary" href="/remito" role="button">volver atras</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection