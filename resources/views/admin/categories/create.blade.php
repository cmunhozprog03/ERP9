@extends('adminlte::page')

@section('title', 'Nova Categoria')

{{-- @section('content_header')
    
@stop --}}

@section('content')
  
<div class="row justify-content-center">
  <div class="col-md-8 col-sm-12 col-lg-6 mt-2">
    <div class="w3-card-4">
      <header class="w3-container w3-dark-gray">
        <h2>Nova Categoria</h2>
      </header>
      <div class="w3-container">

      </div>
      <footer>
        <div class="row justify-content-around">
          <a href="" class="btn btn-outline-dark">CANCELAR</a>
          <button type="submit" class="btn btn-dark">SALVAR</button>
        </div>
        
      </footer>
    </div>
  </div>
</div>
  
@stop

@section('css')
  <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop