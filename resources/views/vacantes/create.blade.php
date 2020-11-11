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

    <div class="mb-5">
      <label
        for="categoria"
        class="block text-gray-700 text-sm mb-2"
      >Categoría:</label>

      <select 
        name="categoria"
        id="categoria"
        class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100"
      >
        <option disabled selected>- Selecciona -</option>
        @foreach ($categorias as $categoria)
          <option value="{{ $categoria->id }}">
            {{ $categoria->nombre }}
          </option>          
        @endforeach
      </select>
    </div>

    <div class="mb-5">
      <label
        for="experiencia"
        class="block text-gray-700 text-sm mb-2"
      >Experiencia:</label>

      <select 
        name="experiencia"
        id="experiencia"
        class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100"
      >
        <option disabled selected>- Selecciona -</option>
        @foreach ($experiencias as $experiencia)
          <option value="{{ $experiencia->id }}">
            {{ $experiencia->nombre }}
          </option>          
        @endforeach
      </select>
    </div>

    <div class="mb-5">
      <label
        for="ubicacion"
        class="block text-gray-700 text-sm mb-2"
      >Ubicación:</label>

      <select 
        name="ubicacion"
        id="ubicacion"
        class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100"
      >
        <option disabled selected>- Selecciona -</option>
        @foreach ($ubicaciones as $ubicacion)
          <option value="{{ $ubicacion->id }}">
            {{ $ubicacion->nombre }}
          </option>          
        @endforeach
      </select>
    </div>

    <div class="mb-5">
      <label
        for="salario"
        class="block text-gray-700 text-sm mb-2"
      >Salario:</label>

      <select 
        name="salario"
        id="salario"
        class="block appearance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100"
      >
        <option disabled selected>- Selecciona -</option>
        @foreach ($salarios as $salario)
          <option value="{{ $salario->id }}">
            {{ $salario->nombre }}
          </option>          
        @endforeach
      </select>
    </div>

    <button
      type="submit"
      class="bg-teal-500 w-full hover:bg-teal-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase"
    >Publicar vacante</button>
  </form>

@endsection