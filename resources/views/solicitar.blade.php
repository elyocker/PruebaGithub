@extends('adminlte::page')
@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content')

    <form action="">
      <div class="card">
        <div class="card-header">
          <h3>Solicitar mas cantidad:</h3>
        </div>
        <div class="card-body">
          <select class="custom-select custom-select-lg mb-2 col-md-4">
            <option selected>Selecciona el producto</option>
            <option value="1">Martillo</option>
            <option value="2">Cama</option>
            <option value="3">Escritorio</option>
          </select><br>
          <h3>Cantidad:</h3>
          <div class="input-group col-md-4">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">cantidad</span>
            </div>
            <input type="number" min="0" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div><br>
          <button class="btn btn-primary col-md-3">Solicitar</button>
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
                timer: 3000
            });
        </script>
    @endif

@stop