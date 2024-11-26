@extends('layouts.base')
@section('content')


<form class="max-w-sm mx-auto" action="{{ url('categorias/'.$categoria->id) }}" method="POST" >

<!-- </form>enctype="multipart/form-data"> -->
@csrf
@method('PUT')
  <div class="mb-5">
      <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Descrição:</label>
      <input type="text" name="descricao" id="descricao" placeholder="Descrição" value="{{$categoria->descricao}}" class="bg-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  
  <div class="flex justify-center" >
      <button class="bg-gray-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Atualizar Categoria</button>
  </div>
  
</form>
@endsection
