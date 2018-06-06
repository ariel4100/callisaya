@section('title','Inicio')
@extends('partials.template')
@section('content')
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    @include('partials.msg')
                    <a href="{{route('usuario.create')}}" class="btn btn-primary">Añadir nuevo usuario</a>
                    <table class="table table-hover table-bordered" id="myTable">
                        <thead class="thead-dark">
                        <tr>
                            <th>nombre</th>
                            <th>cumple</th>
                            <th>accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $user)
                            <tr>
                                <td>{{$user->user_name}}</td>
                                <td>{{$user->user_birthday}}</td>
                                <td style="width: 10px;">
                                    <a href="/usuario/{{$user->user_id}}/edit" class="btn btn-warning btn-sm ml-3"><i class="fa fa-pencil" aria-hidden="true"></i>editar</a>
                                    <form action="/usuario/{{$user->user_id}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
