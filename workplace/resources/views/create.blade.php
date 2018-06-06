@section('title','nuevo')
@extends('partials.template')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="card">
            <div class="card-header info-color-dark text-center">
                <h3 class="text-white">Añadir nueva Usuario</h3>
            </div>
            <div class="card-body">
                @include('partials.msg')
                <form method="POST" action="/usuario">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group label-floating">
                                <label class="control-label">nombre de usuario</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">cumpleaños</label>
                                <input type="date" class="form-control" name="cumple">
                            </div>
                        </div>
                    </div>
                    <a href="/usuario" class="btn btn-danger">Atras</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@stop
