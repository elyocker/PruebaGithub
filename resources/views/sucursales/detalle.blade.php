@extends('adminlte::page')
@section('title', 'Grafica ')

@section('plugins.Sweetalert2', 'plugins.Chartjs')
    

@section('content_header')
    <h1>Grafica de Ventas</h1>
@stop

@section('content')
    <h3 class="display-4 text-center">Sucursal {{$sucursal->nombre_sucursal}}</h3>
    <div class="card">
        <canvas class="my-4 w-100" id="GraficaVentasSucursal" width="900" height="380"></canvas>
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