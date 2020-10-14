@extends('adminlte::page')
@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)
    

@section('content_header')
    <h1>Sucursales</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h4 class="display-4 text-center">Modificar sucursal</h4>
    </div>
    <form action="{{ route('sucursales.update', $sucursal->id) }}"  class="" method="post" >
        <div class="card-body" >
            @method('put')
            @csrf

            <div class="form-group">
                <input type="number" min="0" name="nit" class="form-control text-center" value="{{$sucursal->nit}}">
            </div>
            <div class="form-group">
                <input type="text" name="nombre_sucursal" class="form-control text-center" value="{{$sucursal->nombre_sucursal}}">
            </div>
            <div class="form-group">
                <input type="text" name="direccion" value="{{$sucursal->direccion}}" class="form-control text-center">
            </div>
            <div class="form-group">
                <input type="text" name="barrio" value="{{$sucursal->barrio}}" class="form-control text-center">
            </div>
            <div class="form-group">
                <input type="number" min="0" name="telefono" value="{{$sucursal->telefono}}" class="form-control text-center">
            </div>
            <div class="form-group">
                <select class="form-control text-center" name="id_empresas" id="sel1">
                    @foreach ($empresa as $item)
                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select class="form-control text-center" name="id_municipio" id="sel1">
                    @foreach ($municipio as $item)
                        <option value="{{$item->id}}">{{$item->nombre_municipio}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select class="form-control text-center" name="id_departamento" id="sel1">
                    @foreach ($departamento as $item)
                <option value="{{$item->id}}">{{$item->nombre_departamento}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-warning">Modificar</button>
            <a href="{{ route('sucursales.index')}}" class="btn btn-dark" >Regresar</a>
        </div>
    </form>
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