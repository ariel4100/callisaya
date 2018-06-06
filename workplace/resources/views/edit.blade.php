@section('title','editar')
@extends('partials.template')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="card">
            @include('partials.msg')
            <div class="card-header info-color-dark text-center">
                <h3 class="text-white">Editar</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="/usuario/{{$usuario->user_id}}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">nombre de usuario</label>
                                <input type="text" class="form-control" name="name" value="{{$usuario->user_name}}">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">cumpleaños</label>
                                <input type="date" class="form-control" name="cumple" value="{{$usuario->user_birthday}}">
                            </div>
                        </div>
                    </div>
                    <a href="{{route('usuario.index')}}" class="btn btn-danger">Atras</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@stop
