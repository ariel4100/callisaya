@extends('app.partials.app')

@section('content')
    <section class="container my-5">
        <h1>Lista de Proveedores</h1>
        <div class="row">
            <div class="col-md-12">
            <a href="home/create" class="btn btn-success my-3">+ crear nuevo</a>
                <table class="table">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">#codigo</th>
                        <th scope="col">dirrecion</th>
                        <th scope="col">telefono</th>
                        <th scope="col">fecha alta</th>
                        <th scope="col">acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($providers as $provider)
                    <tr>
                        <td>{{$provider->id}}</td>
                        <td>{{$provider->direccion}}</td>
                        <td>{{$provider->telefono}}</td>
                        <td>{{$provider->fecha_alta}}</td>
                        <td class="row">
                            <a href="home/{{$provider->id}}/edit" class="btn btn-sm btn-warning mr-2">editar</a>
                            <form action="{{ route('home.destroy',$provider->id) }}" method="post">
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