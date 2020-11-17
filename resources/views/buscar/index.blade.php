@extends('layouts.app')

@section('navegacion')
  @include('ui.categoriasnav')
@endsection

@section('content')

  @if(count($vacantes) > 0)
    <h1 class="text-3xl text-gray-700 m-0">
      Resultados de la busqueda
    </h1>
    <div class="mt-10 bg-gray-100 p-10 shadow">    
      @include('ui.listadovacantes')
    </div>
  @else
    <p class="text-center mt-5">No hay vacantes que concuerden con tu búsqueda.</p>
  @endif

@endsection