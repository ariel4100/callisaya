@extends('app.partials.app')

@section('content')
<section class="container mt-5">
<h1>CREAR PROVEEDOR</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('home.store')}}" method="POST" class="border border-success p-4">
                {{csrf_field ()}}
                <div class="form-group">
                    <label for="">direccion: </label>
                    <input type="text" name="direccion" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">telefono: </label>
                    <input type="text" name="telefono" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">fecha de alta: </label>
                    <input type="date" name="fecha_alta" class="form-control">
                </div>
                <button type="submit" class="btn btn-success ">guardar</button>
                <a class="btn btn-primary" href="/home" role="button">volver atras</a>
            </form>
        </div>
    </div>
</section>

@endsection