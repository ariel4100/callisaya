@extends('app.partials.app')

@section('content')
    <section class="container my-5">
        <h1>Lista de Remitos</h1>
        <div class="row">
            <div class="col-md-12">
            <a href="remito/create" class="btn btn-success my-3">+ crear nuevo</a>
                <table class="table">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">#codigo</th>
                        <th scope="col">proveedor n°</th>
                        <th scope="col">monto total</th>
                        <th scope="col">fecha de emision</th>
                        <th scope="col">acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($remitos as $remito)
                    <tr>
                        <td>{{$remito->id}}</td>
                        <td>{{$remito->proveedor->id}}</td>
                        <td>{{$remito->monto_total}}</td>
                        <td>{{$remito->fecha_emision}}</td>
                        <td class="row">
                            <a href="remito/{{$remito->id}}" class="btn btn-sm btn-info">ver</a>
                            <a href="remito/{{$remito->id}}/edit" class="btn btn-sm btn-warning mx-2">editar</a>
                            <form action="{{ route('remito.destroy',$remito->id) }}" method="post">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('¿desea eliminarlo?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection