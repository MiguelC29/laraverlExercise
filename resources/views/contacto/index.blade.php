@extends('home')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h1>LISTA DE CONTACTOS</h1><br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
            Nuevo
        </button>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contactos as $contacto)
                    <tr>
                        <td scope="row">{{ $contacto->id }}</td>
                        <td>{{ $contacto->nombre }}</td>
                        <td>{{ $contacto->telefono }}</td>
                        <td>{{ $contacto->direccion }}</td>
                        <td>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{ $contacto->id }}">
                            Editar
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $contacto->id }}">
                            Eliminar
                        </button>
                        </td>
                    </tr>
                    @include('contacto.modal-info')
                    @endforeach
                </tbody>
            </table>
        </div>

        @include('contacto.modal-create')

    </div>
    <div class="col-md-2"></div>
</div>


@endsection