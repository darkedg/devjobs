@extends('layouts.app')

@section('navegacion')
  @include('ui.adminnav')
@endsection

@section('content')
  <h1 class="text-2xl text-center mt-10">Nueva Vacante</h1>

  <form class="max-w-lg mx-auto my-10" action="">
    <div class="mb-5">
      <label
        for="titulo"
        class="block text-gray-700 text-sm mb-2"
      >Titulo vacante:</label>

      <input
        id="titulo"
        type="text"
        class="p-3 bg-gray-100 rounded form-input w-full @error('titulo') border border-red-500 @enderror"
        name="titulo">
    </div>

    {{ $categorias }}

    <button
      type="submit"
      class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase"
    >Publicar vacante</button>
  </form>

@endsection