@extends('layouts.app')

@section('navegacion')

@endsection

@section('content')

  <div class="mt-10 bg-gray-100 p-10 shadow">
    <h1 class="text-3xl text-gray-700 m-0">
      Categoria:
      <span class="font-bold">{{ $categoria->nombre }}</span>
    </h1>

    @if(count($vacantes) > 0)
      @include('ui.listadovacantes')
    @else
      <p class="text-center mt-5">No hay vacantes</p>
    @endif
  </div>

@endsection