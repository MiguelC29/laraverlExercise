@extends('home')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h1 class="text-center titulo">LISTA DE CONTACTOS</h1><br>
        <!-- Button trigger modal -->
        <div class="container mb-3">
            <button type="button" class="btn btn_nuevo" data-toggle="modal" data-target="#create">
                <i class="fa-solid fa-plus"></i> Nuevo</button>
            <a href="{{ route('contactos.pdf') }}" class="btn btn_pdf" target="_blank">PDF</a>
        </div>
        <div class="table-responsive">
            <table class="table table-dark text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach($contactos as $contacto)
                    <tr>
                        <td scope="row">{{ $contacto->id }}</td>
                        <td>{{ $contacto->nombre }}</td>
                        <td>{{ $contacto->telefono }}</td>
                        <td>{{ $contacto->direccion }}</td>
                        <td>
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#edit{{ $contacto->id }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $contacto->id }}">
                            <i class="fa-solid fa-trash"></i>
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