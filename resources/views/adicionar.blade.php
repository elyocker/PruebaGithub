@extends('adminlte::page')
@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content')

    <form action="">
        <div class="card">
            <div class="card-header">
                <h3>Adicionar un nuevo producto:</h3>
            </div>
            <div class="card-body">
            <h3>Nombre del producto:</h3>
            <div class="input-group col-md-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">nombre</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <h3>Precio por unidad:</h3>
            <div class="input-group col-md-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">precio</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div><br>
            <button class="btn btn-primary col-md-3">Adicionar</button>
        </div>
    </form>

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