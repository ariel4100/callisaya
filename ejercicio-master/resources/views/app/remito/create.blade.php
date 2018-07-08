@extends('app.partials.app')

@section('content')
<section class="container mt-5">
<h1>CREAR REMITO</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('remito.store')}}" method="POST" class="border border-success p-4">
                {{csrf_field ()}}
                <div class="form-group">
                    <input type="hidden" name="fecha_emision" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">monto total: </label>
                    <input type="text" name="monto_total" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">proveedor n°: </label>
                    <select name="proveedor_id" class="form-control" >
                        @foreach($providers as $provider)
                        <option>{{$provider->id}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success ">guardar</button>
                <a class="btn btn-primary" href="/remito" role="button">volver atras</a>
            </form>
        </div>
    </div>
</section>

@endsection