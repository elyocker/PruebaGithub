@extends('adminlte::page')
@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)
    

@section('content_header')
    <h1>Sucursales</h1>
@stop

@section('content')
    {{-- con este boton se agrega una nueva sucursal  --}}
    <button type="button" class="btn btn-info btn-lg mb-3" data-toggle="modal" data-target="#CrearSucursal">Agregar sucursal</button>
    {{-- esta es la tabla de las sucursales --}}
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
                        {{-- se pasa el id para editar la sucursal  --}}
                        <a href="{{route('sucursales.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                    {{-- se utliza el metodo de eliminar         --}}
                    <form action="{{route('sucursales.destroy', $item->id)}}" class="d-inline" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                    </td>
                    <td>
                        <a href="{{ route('sucursales.show', $item->id)}}" class="btn btn-info" ><i class="fas fa-info-circle"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Formulario para crear sucursal  -->
    <div id="CrearSucursal" class="modal fade" role="dialog">
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
                        <div class="form-group">
                            <input type="number" min="0" name="nit" class="form-control" value="" placeholder="Escribe el nombre del nit">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nombre_sucursal" class="form-control" value="" placeholder="Escribe el nombre de la sucursal">
                        </div>
                        <div class="form-group">
                            <input type="text" name="direccion" value="" class="form-control" placeholder="Escribe la dirección">
                        </div>
                        <div class="form-group">
                            <input type="text" name="barrio" value="" class="form-control" placeholder="Escribe el barrio">
                        </div>
                        <div class="form-group">
                            <input type="number" min="0" name="telefono" value="" class="form-control" placeholder="Escribe el telefono">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="id_empresas" id="sel1">
                                @foreach ($empresa as $item)
                                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="id_municipio" id="sel1">
                                @foreach ($municipio as $item)
                                    <option value="{{$item->id}}">{{$item->nombre_municipio}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="id_departamento" id="sel1">
                                @foreach ($departamento as $item)
                            <option value="{{$item->id}}">{{$item->nombre_departamento}}</option>
                                @endforeach
                            </select>
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

@section('js')
    @if (session('mensaje'))
        <script>
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: '{{ session('mensaje') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
@stop