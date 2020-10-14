@extends('adminlte::page')
@section('title', 'Productos')

@section('plugins.Sweetalert2', true)
    
@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    
    <form action="{{route('productos.store')}}" method="post">
        @csrf
        <table class="table">
            <thead class="thead-dark ">
            <tr class="center">
                <th scope="col">nombre</th>
                <th scope="col">descripcion</th>
                <th scope="col">precio</th>
                <th scope="col">cantidad</th>
                <th scope="col">Selecciona</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($productos as $item)
                    <tr>
                        <th scope="row">{{$item->nombre}}</th>
                        <td>{{$item->descripcion}}</td>
                        <td>{{$item->precio}}</td>
                        <td>{{$item->cantidad}}</td>
                        <td>   
                            <input type="checkbox" name='{{$item->nombre}}' value="{{$item->id}}" > 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" data-toggle="modal" data-target="#Facturar" class="btn btn-danger">Facturar</button>
    </form>

    <!-- Modal para facturar las ventas  -->
    <div id="Facturar" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear nueva sucursal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{ route('sucursales.store') }}"  class="" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <div class="input-group">
                                  <label class="mt-1">Articulo 1: </label>
                                  <input type="text" class="form-control input-lg ml-4" name="inputDocumentoProveedor" readonly="" id="inputDocumentoProveedor">
                                </div>
                              </div>
                            </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Registrar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin.custom.css">
@stop

@section('js')
    @if (session('mensaje'))
        <script>
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: '{{ session('mensaje') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif
@stop