@extends('app.partials.app')

@section('content')
<section class="container mt-5">
<h1>EDITAR PROVEEDOR</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('remito.update',$remito->id) }}" method="POST" class="border border-success p-4">
                {{ method_field('PUT') }}
                {{csrf_field()}}
                <div class="form-group">
                    <input type="hidden" class="form-control" name="fecha_emision" value="{{$remito->fecha_emision}}">
                </div>
                <div class="form-group">
                    <label for="">monto total: </label>
                    <input type="text" class="form-control" name="monto_total" value="{{$remito->monto_total}}">
                </div>
                <div class="form-group">
                    <label for="">proveedor n°: </label>
                    <select name="proveedor_id" class="form-control">
                        @foreach($proveedor as $pro)
                        <option {{$pro->id == $remito->proveedor->id ? 'selected' : ''}} value="{{$pro->id}}">{{$pro->id}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">actualizar</button>
                <a class="btn btn-primary" href="/remito" role="button">volver atras</a>
            </form>
        </div>
    </div>
</section>

@endsection