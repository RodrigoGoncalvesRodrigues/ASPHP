@extends('layouts.base')
@section('content')


<form class="max-w-sm mx-auto" action="{{ url('produtos/'.$produtos->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
  <div class="mb-5">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Descrição do Produto</label>
      <input type="text" name="name" id="name" placeholder="Nome" value="{{$produtos->Descricao}}" class="bg-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-5">
      <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Preço do produto</label>
      <input type="text" name="type" id="type" placeholder="Tipo" value="{{$produtos->preco}}" class="bg-gray-500 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
    <div class="mb-5" >
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="coach_id">Categoria</label>
    <select name="coach_id" id="coach_id" required>
        <option value="">Selecione Categoria</option>
        @foreach ($categorias as $cateoria)
            @if ($categoria->id === $produto->categoria->id)
            <option value="{{$categoria->id}}"selected>{{$categoria->descricao}}</option>
            @else
            <option value="{{$categoria->id}}">{{$categoria->descricao}}</option>
            @endif
        
        @endforeach
    </select>
    </div>
  
  <div class="flex justify-center" >
      <button class="bg-gray-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Atualizar Pokemon</button>
  </div>
  
</form>
@endsection
