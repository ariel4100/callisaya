
    @extends('app.partials.app')

    @section('content')
        <div class="container text-center my-5">
            <h1 class="text-center">Ejercicio</h1>
            <hr>
            <div class="row">
                <p class="lead">Como ves, hay 4 tablas, clientes, facturas, proveedores y remitos.
                    La idea es que armes el ABM de proveedores con todos los datos que estan en su tabla, y luego
                    el ABM de  remitos,  y su mostrar a que proveedor pertenece cada remito al dar los remitos de alta,
                    editarlos y mostrarlos.
                    <b> Es decir, como el remito esta relacionado a un proveedor, hay que mostrar a de que proveedor se trata asi como permitir cambiarlo en la parte de edicion del ABM.</p></b>

                <div class="col-md-6">
                    <a href="{{route('home.index')}}" class="btn btn-lg btn-block btn-primary">PROVEEDORES</a>
                </div>
                <div class="col-md-6">
                    <a href="{{route('remito.index')}}" class="btn btn-lg btn-block btn-primary">REMITOS</a>
                </div>
                <p class="lead my-3"><b> Tengo 2 Modelos(Provider-Refer), 2 Controladores(ProviderController-ReferController),
                    use el framework Bootstrap para el diseño. <br>
                    En el modelo cree la relacion de 1 a muchos, Y en un controlador arme el ABM, mientras el otro el ABM mas el Mostrar a que proveedor pertenece.</b></p>
            </div>
        </div>
    @endsection
