@extends('app.partials.app')

@section('content')
<section class="container mt-5">
<h1>EDITAR PROVEEDOR</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('home.update',$provider->id)}}" method="POST" class="border border-success p-4">
                {{ method_field('PUT') }}
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">direccion: </label>
                    <input type="text" class="form-control" name="direccion" value="{{$provider->direccion}}">
                </div>
                <div class="form-group">
                    <label for="">telefono: </label>
                    <input type="text" class="form-control" name="telefono" value="{{$provider->telefono}}">
                </div>
                <div class="form-group">
                    <label for="">fecha de alta: </label>
                    <input type="date" class="form-control" name="fecha_alta" value="{{ date('Y-m-d', strtotime( $provider->fecha_alta))}}">
                </div>
                <button type="submit" class="btn btn-success">actualizar</button>
                <a class="btn btn-primary" href="/home" role="button">volver atras</a>
            </form>
        </div>
    </div>
</section>

@endsection