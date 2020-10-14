@extends('adminlte::page')
@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)
    

@section('content_header')
    <h1>Sucursales</h1>
@stop

@section('content')

    <button type="button" class="btn btn-info btn-lg mb-3" data-toggle="modal" data-target="#modalNew">Agregar sucursal</button>

    <table class="table text-center">
        <thead class="thead-dark ">
          <tr class="center">
            <th scope="col">Empresa</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nit</th>
            <th scope="col">Dirección</th>
            <th scope="col">Barrio</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>
            <th scope="col">Detalles</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($sucursales as $item)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$item->nombre_sucursal}}</td>
                    <td>{{$item->nit}}</td>
                    <td>{{$item->direccion}}</td>
                    <td>{{$item->barrio}}</td>
                    <td>{{$item->telefono}}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEdit"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalInfo"><i class="fas fa-info-circle"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div id="modalNew" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Header</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modalEdit" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Header</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modalInfo" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Header</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@stop