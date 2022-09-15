@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
<div class="row  justify-content-between">
  <h1>Categorias</h1>
  <form action="" class="form-inline">
    <input type="text" class="form-control" placeholder="Pesquisar...">
    <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
  </form>
  <a href="{{ route('admin.categories.create') }}" class="btn btn-dark"><i class="	fas fa-plus"></i>&nbsp; ADICIONAR</a>
</div>
    
@stop

@section('content')
  
  <div class="w3-card-4">
    @if ($categories->count())
    <table id="tableCategory" class="table-hover table-striped table-bordered">
      <thead>

      </thead>
    </table>
    @else
      <div class="alert alert-secondary">
        <h5>Nenhum registro encontrado.</h5>
      </div>
    @endif
    
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